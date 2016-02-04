<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proveedor;

class ProveedorController extends Controller
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
        
        return view('home', ['proveedores' => Proveedor::all(),
            'tabla_proveedores'=>true,
            'titulo'=>"Relación de proveedores",
            'subtitulo'=>"Lista ampliada de proveedores.",
            'link_proveedor' =>true]);
        
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        if(!$proveedor)
        {
            //ERROR
        }
        $total = 0;
        
        foreach($proveedor->consumos as $consumo)
        {
            $total += $consumo->pivot->consumo;
        }


        return view('home', ['proveedor' => $proveedor, 
            'consumos'=>$proveedor->consumos, 'total_consumo'=>$total,
            'titulo'=>"Consumos proveedor",
            'subtitulo'=>"Asociados que han consumido del proveedor.",
            'link_proveedor' =>true,
            'show_proveedor' => true]);
    
    }	
    	
   
}
