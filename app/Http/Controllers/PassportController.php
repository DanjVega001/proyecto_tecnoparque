<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Stand;
use App\Models\Places;
use App\Models\Passport;
use App\Models\Schedule;

class PassportController extends Controller
{

    private $service;
    private $user;

    public function __construct(AuthService $service)
    {
        $this->service=$service;
        
    }

    private function userInauthenticated()
    {
        $this->user = $this->service->getUserAuthenticated();
        if (!$this->user) {
            return view('auth/login', ['message' => 'No se ha logueado']);
        } else if ($this->user->rol->name != 'Administrador') {
            return view('home', ['message' => 'No tiene los permisos para ejecutar esta acción']);
        } 
        
        return null;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInauthenticated = $this->userInauthenticated();
        if ($userInauthenticated !== null) return $userInauthenticated;

        $passports= Passport::where('user_id',  $this->user->id)->with('stand')->get();
        //dd($passports);
        return view('passport.index', compact('passports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $userInauthenticated = $this->userInauthenticated();
        if ($userInauthenticated !== null) return $userInauthenticated;

        return view('passport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($stand_id)
    {   
        $userInauthenticated = $this->userInauthenticated();
        if ($userInauthenticated !== null) return $userInauthenticated;


        $passport= new Passport();
        $passport->date = Carbon::now();
        $passport->user_id = $this->user->id;
        $passport->stand_id = $stand_id;
        $passport->save();
        return view('paginas-sello/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }
}    