<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                     //Fazemos a validação dos campos de titulo e corpo da postagem
     $validatedData = $request ->validate([
        'name' => ['required','max:100'],//obrigatorio,valor unico e tem que possuir no maximo, 255 caracteres
        'email' => [ 'email:rfc,dns','required','unique:players'],//o email deve ser unico para cada jogador e é obrigatorio
        'number' => ['required','unique:players','min:9'],//o numero vai ser unico, é obrigatorio, e deve conter entre 11 e 9 digitos
        'nationality' => ['required'],//obrigatorio
        'age' => ['required','integer'],
        'position' => ['required'],
        'description' => ['required'],
    ]);

        $player = new Players($validatedData);///criamos

                $player->user_id = Auth::id();//identificamos o autor
                $player->save();//salvamos
                return redirect('players')->with('success', 'Jogador cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
