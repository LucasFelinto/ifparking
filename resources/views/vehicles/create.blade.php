<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    
<div class="d-flex align-items-center justify-content-center ">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light bg-dark">{{ __('Cadastre seu veículo') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('vehicles.store') }}">
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
                            <option value="Prata">prata</option>
                                  <option value="Branco">branco</option>
                                  <option value="Cinza">cinza</option>
                                  <option value="Vermelho">vermelho</option>
                                  <option value="Preto">preto</option>
                            </select>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de veículo') }}</label>
                        <div class="col-md-6">
                        
                        <select id="inputState" class="form-control" name="type_id">
                        @foreach($type as $types)
                            <!-- <option selected>Posição</option>!-->
                                  <option value="{{$types->id}}">{{$types->name}}</option>
                                  @endforeach
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


</body>
</html>

