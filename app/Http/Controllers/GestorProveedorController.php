<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proveedor;
use App\User;

class GestorProveedorController extends Controller
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
    public function index($id)
    {
        $gestor = User::find($id);
        if(!$gestor)
        {
        	return response()->json(['message' => 'El gestor no existe', 'code'=>404],404);
        }
        return response()->json(['data' => $gestor->proveedores],200);
        
    }

}
