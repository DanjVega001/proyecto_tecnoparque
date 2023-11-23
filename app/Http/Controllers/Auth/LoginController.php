<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout(Request $request)
    {
        $isUserGoogle = Auth::user()->auth_name==='google';
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($isUserGoogle) {
            // eb lugar de la url de google.com deberiamos tenr la url del servicio al que se va amontar la app.
            return redirect()->away('https://accounts.google.com/Logout?continue=https://www.google.com');
        }
        return $this->loggedOut($request) ?: redirect('/');
        
    }


    /*public function logout(Request $request)
    {
        /*
        Auth::logout(); // Cierra la sesión del usuario

        $request->session()->invalidate(); // Invalida la sesión

        return $this->loggedOut($request) ?: redirect('/'); // Redirige después del cierre de sesión
        //return redirect('https://www.google.com/accounts/Logout');
        // Cierra la sesión del usuario en tu aplicación
        if (Auth::check()) {
            $token = Auth::user()->token;
            if ($token && $token->expires_at->isFuture()) {
                // El token no ha expirado
                // Resto del código
                return "token no ha expirado";

            } else {
                // El token ha expirado, toma las medidas necesarias
                return "token ha expirado";
            }
        }return "No login";
        
        
        Auth::logout();

        // Obtén el token de acceso del usuario actual
        
        $accessToken = Auth::user()->token;

        // Revoca el token de acceso en Google
        Http::post('https://accounts.google.com/o/oauth2/revoke', [
            'token' => $accessToken,
        ]);

        // Invalida la sesión
        $request->session()->invalidate();

        // Redirige después del cierre de sesión
        return $this->loggedOut($request) ?: redirect('/');
    }*/
}
