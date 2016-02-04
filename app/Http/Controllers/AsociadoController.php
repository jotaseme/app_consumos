<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asociado;
use App\Proveedor;


class AsociadoController extends Controller
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
            'tabla_asociados'=>true,'titulo'=>"Relación de asociados",
            'subtitulo'=>"Lista especifica con los consumos de cada asociado.",
            'link_asociado' =>true]);
        
    }	

    public function show($id){
        $asociado = Asociado::find($id);
        if(!$asociado)
        {
            //ERROR
        }
        $total = 0;
        foreach($asociado->consumos as $consumo)
        {
            $total += $consumo->pivot->consumo;
        }


        return view('home', ['asociado' => $asociado, 
            'consumos'=>$asociado->consumos, 'total_consumo'=>$total,
            'titulo'=>"Consumos asociado",
            'subtitulo'=>"Lista especifica con los consumos del asociado.",
            'link_asociado' =>true,
            'show_asociado' =>true]);
    }
    	
   
}
