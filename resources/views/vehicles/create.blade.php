<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>IFParking | Seus veículos</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vehicles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #323e93;
        color: white;
        }

        /* Style the buttons inside the tab */
        .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        color: white;

        }

        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #4a57b7;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color: #4a57b7;
        }

        /* Style the tab content */
        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
        }
        </style>
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
         <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')">Carro</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Moto</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Bicicleta</button>
        </div>

        <div id="London" class="tabcontent" >
            <form class="margin: 0 auto; width: 400px;" action="{{ route('vehicles.store') }}" method="POST" >
                @csrf
                <input type="hidden" name="type_id" value="1">
                <div style="width: 100%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="model" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Modelo</label>
                </div>
                <div style="width: 50%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="board"  maxlength="8" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Placa</label>
                </div>
                <div style="width: 49%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" required>
                    <input class="mdl-textfield__input" name="color" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Color</label>
                </div>
                <button style="width: 100%;" class="mdl-button mdl-js-button mdl-button--raised">
                    Enviar
                </button>
            </form>
        </div>

        <div id="Paris" class="tabcontent">
               <form class="margin: 0 auto; width: 400px;" action="{{ route('vehicles.store') }}" method="POST" >
                @csrf
                <input type="hidden" name="type_id" value="2">
                <div style="width: 100%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="model" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Modelo</label>
                </div>
                <div style="width: 50%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="board"  maxlength="8" type="text" id="sample3"required>
                    <label class="mdl-textfield__label" for="sample3">Placa</label>
                </div>
                <div style="width: 49%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="color" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Color</label>
                </div>
                <button style="width: 100%;" class="mdl-button mdl-js-button mdl-button--raised">
                    Enviar
                </button>
            </form>
        </div>

        <div id="Tokyo" class="tabcontent">
               <form class="margin: 0 auto; width: 400px;" action="{{ route('vehicles.store') }}" method="POST" >
                @csrf
                <input type="hidden" name="type_id" value="3">
                <div style="width: 50%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="model" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Modelo</label>
                </div>
                <div style="width: 49%;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" name="color" type="text" id="sample3" required>
                    <label class="mdl-textfield__label" for="sample3">Color</label>
                </div>
                <button style="width: 100%;" class="mdl-button mdl-js-button mdl-button--raised">
                    Enviar
                </button>
            </form>
        </div>
    </div>
    </main>

    <main>
    <div class="form-container">

        {{-- <h2>Selecione o tipo</h2> --}}

       

    </main>
  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


</body>

</html>
