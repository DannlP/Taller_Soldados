<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldado;

class SoldadoController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Cod_s' => 'required',
            'Nom_s' => 'required',
            'Apell_s' => 'required',
            'Grado_s' => 'required',
            'Cod_ce1' => 'required|integer',
            'Num_com1' => 'required|integer',
            'Cod_c2' => 'required|integer',
        ]);

        Soldado::create($request->all());

        return redirect()->back()->with('success', 'Soldado agregado correctamente');
    }




}
