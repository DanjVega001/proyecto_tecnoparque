<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Stand;
use App\Models\Agenda;
use App\Models\Places;

class AgendaController extends Controller
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
        if (!$this->user || $this->user->rol->nombre != 'Empresa') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->userInauthenticated();
        
        $agendas= Agenda::with('place', 'stand')->get();
        //dd($places);
        return view('agenda.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->userInauthenticated();

        $stands= Stand::all();
        $places= Places::all();

        return view('agenda.create', compact('stands', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->userInauthenticated();

        $validate = $request->validate([
            'stand_id'=>'required',
            'place_id'=>'required',
        ]);

        $date=Carbon::now();

        $agenda= new Agenda();
        $agenda->date_start = $date;
        $agenda->date_end = $date;
        $agenda->stand_id = $request->stand_id;
        $agenda->place_id = $request->place_id;
        $agenda->save();
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($agenda)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->userInauthenticated();

        $agenda = Agenda::find($id);
        $stands= Stand::all();
        $places= Places::all();

        return view('agenda.edit', compact('agenda', 'stands', 'places'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userInauthenticated();
        $agenda = Agenda::find($id);   
        if ($agenda) {
            $agenda->delete();
            return redirect()->route('agenda.index')->with('success', 'Lugar eliminado exitosamente');
        } else {
            return redirect()->route('agenda.index')->with('error', 'No se encontró el lugar para eliminar');
        }
    }
}
