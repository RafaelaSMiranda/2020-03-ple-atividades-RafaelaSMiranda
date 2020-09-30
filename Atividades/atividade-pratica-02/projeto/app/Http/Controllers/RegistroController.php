<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Auth = true;

        $registros = Registro::orderBy('dataLimite')->get();

        foreach ($registros as $registro) {

            // echo $registro->equipamento->nome . '-';
            // echo $registro->user->name . '-';

            $registro->dataLimite =  date('d-m-Y', strtotime($registro->dataLimite));
        }



        if ($Auth) {
            return view('administrativo.manutencao.index', ['registros' => $registros]);
        } else {
            return view('suporte.registro.index', ['registros' => $registros]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $equipamentos = Equipamento::get();

        return  view('administrativo.manutencao.create', ['equipamentos' => $equipamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        // dd($request->all());
        Registro::create($request->all());
        session()->flash('mensagem', 'Manutenção cadastrada com sucesso!');
        return redirect()->route('admPrincipal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}