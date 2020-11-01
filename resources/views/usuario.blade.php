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

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand"  href="usuario">IFPARKING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="usuario">PERFIL <span class="sr-only">(current)</span></a>
                <!-- <a class="nav-link" href="parking">VAGAS</a> -->
                <a class="nav-link" href="vehicles">VEÍCULOS</a>
                <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
        
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                        {{ __('SAIR') }}
                    </a>
                </form>
            </div>
         </div>
        </div>
    </nav>

    <div class="jumbotron">
  <h1 class="display-4">Olá, seja bem-vindo!</h1>
  <p class="lead">IFparking é um site onde você usuario pode ver vagas de estacionameno disponives </p>
  <hr class="my-4">
  <p>Confira a vaga disponivel para o seu veiculo no botão abaixo</p>
  <a class="btn btn-dark btn-lg" href="parking" role="button">Ver Vagas <div role="status">
</div></a>

</div>
</body>
</html>




