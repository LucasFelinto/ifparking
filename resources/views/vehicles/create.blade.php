@extends('layouts.app')
@section('content')

<div class="d-flex align-items-center justify-content-center " style="height:50px; margin:10px;">

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações disponiveis
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ route ('players.index')}}">Listar seus jogadores</a>
    <a class="dropdown-item" href="{{ route ('players.create')}}">Cadastar novo jogador</a>
  </div>
</div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">{{ __('Cadastre seu veículo') }}</div>


                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="board" class="col-md-4 col-form-label text-md-right">{{ __('Placa do veículo') }}</label>
                            <div class="col-md-6">
                                <input id="board" type="text" class="form-control @error('board') is-invalid @enderror" name="board" maxlength="100"  value="{{old('board')}}" required autofocus maxlength="100">
                                @error('board')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>
                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" required autofocus value="{{old('model')}}" >
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Cor') }}</label>
                        <div class="col-md-6">
                        <select id="inputState" class="form-control" name="color">
                            <!-- <option selected>Posição</option>!-->
                            <option value="Goleiro">prata</option>
                                  <option value="Goleiro">branco</option>
                                  <option value="Goleiro">cinza</option>
                                  <option value="Goleiro">vermelho</option>
                                  <option value="Goleiro">preto</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de veículo') }}</label>
                        <div class="col-md-6">
                        <select id="inputState" class="form-control" name="type_id">
                            <!-- <option selected>Posição</option>!-->
                                  <option value="Goleiro">Carro</option>
                                  <option value="Goleiro">Moto</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Cadastrar veículo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection