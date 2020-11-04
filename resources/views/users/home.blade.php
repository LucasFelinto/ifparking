<!DOCTYPE html>
<html lang="pt-BR">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>IFPARKING | Vagas</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>IFParking | Users</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href={{ asset('css/variables.css') }}>
    <link rel="stylesheet" href={{ asset('css/reset.css') }}>
    <link rel="stylesheet" href={{ asset('css/typography.css') }}>
    <link rel="stylesheet" href={{ asset('css/nav.css') }}>
    <link rel="stylesheet" href={{ asset('css/parking.css') }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

>>>>>>> 60c21d49e1a6e04f637ecd5ab59cbbeaa2eccb09
</head>

<body>
<<<<<<< HEAD
     <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">IFParking | Seus veículos</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="/vehicles">Meus veículos</a>
                <a class="mdl-navigation__link" href="/vehicles/create">Cadastrar veículo</a>
                <a class="mdl-navigation__link" href="">Sair</a>
            </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main style="margin: 50px;" class="mdl-layout__content">
        @foreach ($parkings as $parking)
            <a href={{ route('parking.show', ['parking'=> $parking->id]) }}>{{$parking->name}}</a>
        @endforeach
    </main>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
=======
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">IFParking | Users</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="">Meus veículos</a>
            <a class="mdl-navigation__link" href="/vehicles/create">Cadastrar veículo</a>
          <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="mdl-navigation__link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   this.closest('form').submit();"> {{ __('Sair') }}
                </a>
            </form>
        </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        </nav>
</div>
            
            
            <table class="table table-striped table-dark" style="width:1000px; margin-left:200px;margin-top:100px">
              
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero da vaga</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($zones as $zone)
                  <tr>
                    <th scope="row">{{ $zone->id }}</th>
                    <td>{{ $zone->number }}</td>
                    <td><button class="btn btn-danger">apagar</button></td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
             
              
 
            
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelectorAll('.show-dialog');
    if (!dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }
    // showDialogButton.addEventListener('click', function() {
    //     dialog.showModal();
    // });
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
    });

    showDialogButton.forEach(el => {
        el.addEventListener('click', function() {
            dialog.showModal();
        });
    })
</script>
>>>>>>> 60c21d49e1a6e04f637ecd5ab59cbbeaa2eccb09
</body>
</html>
