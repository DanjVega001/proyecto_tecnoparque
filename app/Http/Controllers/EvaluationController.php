<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use App\Models\Evaluation;
use App\Models\EvaluationHasCriterio;
use App\Models\Stand;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{

    private $service;
    private $user;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    private function userInauthenticated()
    {
        $this->user = $this->service->getUserAuthenticated();
        if (!$this->user || $this->user->rol->nombre != 'Visitante') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);
        }       
        return null;
    }

    private function existeCodigo($qr_code) 
    {
        $existeCodigo = Stand::where('qr_code', $qr_code)->exists();
        return $existeCodigo;
    }

    private function evalCompletada($stand)
    {
        $evalCompletada = Evaluation::where('user_id', $this->user->id)
            ->where('stand_id', $stand->id)->exists();
        return $evalCompletada;
    }

    public function index($qr_code)
    {
        $userInauthenticated = $this->userInauthenticated();
        if ($userInauthenticated !== null) return $userInauthenticated;
        
        $existeCodigo = $this->existeCodigo($qr_code);
        if (!$existeCodigo) {
            return redirect()->route('home')->with('error', 'Codigo QR Invalido');
        }
        $user = Auth::user();
        $criterios = Criterio::all();
        $this->middleware('role:Visitante');
        return view('evaluations/index', compact('criterios','user', 'qr_code'));
    }

    public function store(Request $request, $qr_code)
    {
            
        try {
            DB::beginTransaction();
            
            $userInauthenticated = $this->userInauthenticated();
            if ($userInauthenticated !== null) return $userInauthenticated;

            $existeCodigo = $this->existeCodigo($qr_code);
            if (!$existeCodigo) {
                return redirect()->route('home')->with('error', 'Codigo QR Invalido');
            }
               
            $valorCriterios = $request->input('criterios');
            $rank =  array_sum($valorCriterios) / count($valorCriterios);

            $stand = Stand::where('qr_code', $qr_code)->lockForUpdate()->first();
            $evalCompletada = $this->evalCompletada($stand);
            if ($evalCompletada) {
                return view('home', ['message' => 'Evaluacion ya completada']);
            }
            
            $eval = Evaluation::create([
                'rank' => $rank,
                'feedback' => $request->get('feedback'),
                'stand_id' => $stand->id,
                'user_id' => $this->user->id
            ]);
         
            foreach ($request->criterio_id as $id) {
                EvaluationHasCriterio::create([
                    'criterio_id' => $id,
                    'evaluation_id' => $eval->id
                ]);
            }

            $this->addRankToClalificationStand($rank, $stand);

            DB::commit();
            // DEBE RETORNAR KA VISTA DE LOS STANDS SELLADOS
            return $eval;
        } catch (\Throwable $th) {

            DB::rollback();
            return redirect()->back()->with('error', 'Error al procesar la evaluación');
        }
    }

    private function addRankToClalificationStand($rank, $stand)
    {
        $calification = $stand->calification;
        if ($calification == 0) {
            $stand->update([
                'calification' => $rank
            ]);
        } else {
            $stand->update([
                'calification' => ($calification + $rank) / 2
            ]);
        }
    }
}
