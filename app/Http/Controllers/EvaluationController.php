<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criterio;

class EvaluationController extends Controller
{

    public function index()
    {
        $criterios = Criterio::all();
        return view('evaluations.index', compact('criterios'));
    }

    public function store(Request $request)
    {

    }
}
