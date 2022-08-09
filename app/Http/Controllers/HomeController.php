<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->withTitle('StarEloboost | Inicio');
    }

    /*public function main2()
    {
        return view('index');
    }*/

    public function servicios()
    {
        return view('servicios')->withTitle('StarEloboost |Servicios');
    }

    public function contactanos()
    {
        return view('contactanos')->withTitle('StarEloboost |Contacto');;
    }

    public function registro()
    {
        return view('register');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function evaluacion_servicio()
    {
        return view('evaluacion_servicio');
    }

    public function estadisticas()
    {
        return view('estadisticas');
    }

   
}
