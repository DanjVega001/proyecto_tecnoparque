<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use App\Models\Evaluation;
use App\Models\EvaluationHasCriterio;
use App\Models\Stand;
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
        if (!$this->user || $this->user->rol->nombre != 'Vistante') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);
        }
    }

    public function index($qr_code)
    {
        $this->userInauthenticated();
        if (!$qr_code) {
            return redirect()->route('home')->with('error', 'Codigo QR Invalido');
        }
        $criterios = Criterio::all();
        return view('evaluations/index', compact('criterios', 'qr_code'));
    }

    public function store(Request $request, $qr_code)
    {
        $this->userInauthenticated();
        $valorCriterios = $request->criterios;
        $rank = 0;
        foreach ($valorCriterios as $val) {
            $rank += intval($val);
        }
        $rank /= count($valorCriterios);
        $stand = Stand::where('qr_code', $qr_code)->get();
        $eval = Evaluation::create([
            'rank' => $rank,
            'feedback' => $request->get('feedback'),
            'stand_id' => $stand->id,
            'user_id' => $this->user->id
        ]);
        foreach ($request->criterio_id as $id ) {
            EvaluationHasCriterio::create([
                'criterio_id' => $id,
                'evaluation_id' => $eval->id
            ]);
        }
        return $eval;
    }
}
