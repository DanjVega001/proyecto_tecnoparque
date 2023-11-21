<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Stand;
use App\Models\Classification;
use App\Models\Stand_has_classification;

class StandController extends Controller
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
        $stands = Stand::where('user_id', $this->user->id)->get();
        return view('stands/index', compact('stands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->userInauthenticated();
        $classifications = Classification::all();
        return view('stands/create', compact('classifications'));
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
        $logo = $request->file('logo');
        $nombreImagen = time() . '.' . $logo->extension();
        $logo->storeAs('public', $nombreImagen);
        $banner = $request->file('banner');
        $nombreBanner = time() . '.' . $banner->extension();
        $banner->storeAs('public', $nombreBanner);
        $codigo_qr = Hash::make($request->name);
        $stand = Stand::create([
            'name' => $request->name,
            'logo' => "storage/{$nombreImagen}",
            'banner' => "storage/{$nombreBanner}",
            'description' => $request->description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
            'web' => $request->web,
            'calification' => 0.0,
            'qr_code' => $codigo_qr,
            'user_id' => $this->user->id
        ]);
        $classifications_id = $request->classifications;
        foreach ($classifications_id as $class) {
            Stand_has_classification::create([
                'stand_id' => $stand->id,
                'classification_id' => $class
            ]);
        }
        return $this->index();
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stand = Stand::find($id);
        // DEBE RETORNAR A LA INTERFAZ EL STAND CON SUS DATOS
        return view('stands', compact('stand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->userInauthenticated();
        $stand = Stand::find($id);
        return view('stands/edit', compact('stand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->userInauthenticated();
        Stand::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
            'web' => $request->web  
        ]);
        return $this->index();
    }

    public function updateLogo(Request $request, $id)
    {
        $this->userInauthenticated();
        $stand = Stand::find($id);
        Storage::delete("public/{$stand->logo}");
        $logo = $request->file('logo');
        $nombreLogo = time() . '.' . $logo->extension();
        $logo->storeAs('public', $nombreLogo);
        $stand->update([
            'logo' => 'storage/{$nombreLogo}'
        ]);
        return $this->index();
    }

    public function updateBanner(Request $request, $id)
    {
        $this->userInauthenticated();
        $stand = Stand::find($id);
        Storage::delete("public/{$stand->banner}");
        $banner = $request->file('banner');
        $nombreBanner = time() . '.' . $banner->extension();
        $banner->storeAs('public', $nombreBanner);
        $stand->update([
            'banner' => 'storage/{$nombreBanner}'
        ]);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stands_class = Stand_has_classification::where('stand_id', $id)->get();
        foreach ($stands_class as $val) {
            $val->delete();
        }
        $stand = Stand::find($id);
        $stand->delete();
        Storage::delete("public/{$stand->logo}");
        Storage::delete("public/{$stand->banner}");
        return $this->index();
    }

    public function getAllStands()
    {
        $stands = Stand::all();
        // DEBE RETORNAR LA VISTA DE LOS STANDS
        return view('stands/home', compact('stands'));
    }
}
