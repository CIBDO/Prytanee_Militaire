<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentController extends Controller
{

    public function login()
    {
        return view('connexion.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('login', 'password');

//        if (auth()->attempt($credentials)) {
//            return redirect()->intended('dashboard');
//        }
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            flash()->success('Connexion','Connexion réussie.');
            return redirect()->intended('dashboard');
        }
//        if (Compte::where('identifiant',$request->identifiant)->exists()){
//            $compte = Compte::where('identifiant',$request->identifiant)->first();
//            if (Hash::check($request->mot_de_passe,$compte->mot_de_passe)){
//                Auth::loginUsingId($compte->id);
//            dd($request->all(),Auth::id());
//                flash()->success('Connexion','Connexion réussie.');
//                return redirect()->route('dashboard.admin');
//            }
//        }
        flash()->error('Erreur','Identifiant ou mot de passe incorrect.');
        return redirect()->route('login');
    }
}
