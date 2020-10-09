<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$vehicles = Vehicle::all();
        return view('vehicles.index', [
        'vehicles'=> $vehicles
        ]);*/

        $vehicles = Vehicle::where('user_id',Auth::id())->orderBy('created_at','desc')->paginate(5);//asc para do mais velho ao mais novo

        return view('vehicles.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();
        return view('vehicles.create', compact('type'));

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
        'model' => ['required'],
        'board' => [ 'required'],
        'color' => ['required'],
        'type_id' => ['required'],
    ]);

        $vehicle = new Vehicle($validatedData);///criamos

                $vehicle->user_id = Auth::id();//identificamos o autor
                $vehicle->save();//salvamos
                return redirect('vehicles')->with('success', 'Veículo cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
         if($vehicle->user_id === Auth::id()){
            return view('vehicles.edit', compact('vehicle'));
        }else{
            return redirect()->route('vehicles.index')
            ->with('error', "Você não tem permissão para editar os dados desse veículo!")
            ->withInput();
        }
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
        if($vehicle->user_id === Auth::id()){
          $vehicle->update($request->all());
          return redirect()->route('vehicles.index')->with('success', 'Dados do veículo atualizado!');
        }else{
            return redirect()->route('vehicles.index')
            ->with('error', "You don't have permission to edit this, because are not the author!")
            ->withInput();
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
 
    if($vehicle->user_id === Auth::id()){
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with ('success', 'Veículo deletado!');

        }else{
            return redirect()->route('vehicles.index')   
            ->with('error', "Você precisa ser o proprietário para deletar esse veículo. ")
            ->withInput();
        }
    }
    
}
