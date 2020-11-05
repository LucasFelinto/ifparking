<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>IFParking | Users</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
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


    <div class="jumbotron">
        <div class="d-flex align-items-center justify-content-center ">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-light bg-dark" style="text-align: center">{{ __('ESTACIONAMENTO') }}</div>
                            <div class="card-body">
                                 <form action={{ route('parking.store') }} method="POST">
                                    @csrf
                                    <div style="width: 70%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <div class="col-md-6">
                                            <select class="form-control" name="parking">
                                                <option value="1">Estacionamento</option>
                                            </select>
                                            <input type="text" name="name" placeholder="Exemplo: A01">
                                        <input type="submit" class="btn btn-secondary" value="Enviar" required>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>


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


 </body>
 </html>
