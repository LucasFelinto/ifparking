<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>IFPARKING | Vagas</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
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
</body>
</html>
