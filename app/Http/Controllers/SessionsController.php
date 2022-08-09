<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false ){
            return back()->withErrors([
                'message' => 'El correo o la contraseña es incorrecta por favor intenta denuevo'
            ]);
        } else {
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }else{
                return redirect()->to('/');
            }
        }
    }
}
