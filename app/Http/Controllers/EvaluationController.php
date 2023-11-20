<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Stand;
use App\Models\Criterio;
use App\Models\Evaluation;
use App\Models\EvaluationHasCriterio;
use App\Models\Passport;

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
        $user = Auth::user();
        $this->userInauthenticated();
        $valorCriterios = $request->puntuacion;
        $rank = 0;
        foreach ($valorCriterios as $val) {
            $rank += intval($val);
        }
        $rank /= count($valorCriterios);
        $stand = Stand::where('qr_code', $qr_code)->first();
        $eval = Evaluation::create([
            'rank' => $rank,
            'feedback' => $request->feedback,
            'stand_id' => $stand->id,
            'user_id' => $user->id
        ]);
        
        /*foreach ($request->criterio_id as $id ) {
            EvaluationHasCriterio::create([
                'criterio_id' => $id,
                'evaluation_id' => $eval->id
            ]);
        }*/
        return $eval;
    }
}
