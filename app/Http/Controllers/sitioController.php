<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class sitioController extends Controller
{
    public function index(){
        return view('personas');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'apellidoM' => 'required|string',
            'apellidoP' => 'required|string',
        ]);

        Persona::create($data);

        return response()->json(['message' => 'Persona creada exitosamente']);
    }
}
