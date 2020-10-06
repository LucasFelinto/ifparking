<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="nav-link active" href="#">
                <img src="" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand" href="#">IFPARKING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               
         </div>
        </div>
    </nav>

        <div class="jumbotron">
        <div class="d-flex align-items-center justify-content-center ">  
            </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-light bg-dark" style="text-align: center">{{ __('CADASTRE SEU VEICULO') }}</div>
                            <div class="card-body"> 
                                <form method="POST"action="{{ route('vehicles.store') }}">
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

