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

class EvaluationController extends Controller
{

    private $service;
    private $user;

    public function __construct(AuthService $service)
    {
        $this->service=$service;
        $this->user = $this->service->getUserAuthenticated();
    }

    private function userInauthenticated()
    {
        if (!$this->user || $this->user->rol->nombre != 'Visitante') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);
        }
    }

    public function index($qr_code)
    {
        $this->userInauthenticated();
        if (!$qr_code) {
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
