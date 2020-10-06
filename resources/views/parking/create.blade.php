<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </head>
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
                        <div class="card-header text-light bg-dark" style="text-align: center">{{ __('ESTACIONAMENTO') }}</div>
                            <div class="card-body"> 
                                 <form action="{{ route('parking.store') }} "method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <select id="board" class="form-control @error('board') is-invalid @enderror" name="board" maxlength="10"name="type_id" id="">
                                                <option value="1">Carro</option>
                                                <option value="2">Moto</option>
                                                <option value="3">Bicicleta</option>
                                            </select>
                                        <input type="submit" class="btn btn-secondary" value="enviar">
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
                                               
 </body>
 </html>
