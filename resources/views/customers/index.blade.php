<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>IFParking | Users</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
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

<main style="margin: 50px;" class="mdl-layout__content">

    @foreach ($user as $users)
       <div style="background-color: #323e93;display: inline-block;" class="demo-card-event mdl-card mdl-shadow--2dp">
            <div style="color: white" class="mdl-card__title mdl-card--expand">
                <h4>
                    {{$users->name}}<br>
                    {{$users->id}}<br>
                    <?php 
                    
                    var_dump($users);
                    
                    ?>
                </h4>
            </div>
            <div class="mdl-card__actions mdl-card--border">

            </div>
        </div>
    @endforeach
</main>

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

