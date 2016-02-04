<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Asociado, App\Proveedor;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['asociados' => Asociado::all(),
            'proveedores'=> Proveedor::all(),
            'titulo'=>"Relación de asociados y proveedores",
            'subtitulo'=>"Tablas interactivas para realizar búsquedas rápidas.",
            'inicio'=>true]);
        
    }
}
