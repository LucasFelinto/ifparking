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
        <a class="navbar-brand">IFPARKING</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">



            </div>
        </div>
    </nav>

    <div class="d-flex align-items-center justify-content-center">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações disponiveis
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('vehicles.create')}}">Cadastrar Veiculo</a>
                <a class="dropdown-item" href="/parking">Ver Vagas</a>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="d-flex align-items-center justify-content-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                            @endif

                            <table class="table">

                                <tr style="text-align: center">
                                    <th>PLACA</th>
                                    <th>MODELO</th>
                                    <th>COR</th>
                                    <th>TIPO DE VEÍCULO</th>
                                    <th>DELETAR</th>
                                </tr>


                                @foreach ($vehicles as $vehicle)

                                <tr style="text-align: center">
                                    <td>{{ $vehicle->board }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->color }}</td>
                                    <td>{{ $vehicle->type->name }}</td>
                                    <td>
                                        <form class="delete" action="{{route('vehicles.update', $vehicle->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden"value="1" name="deleted">
                                            <input type="submit" value="Deletar" class="">
                                            <div class="alert">
                                                <h1>deseja deletar esse carro?</h1>
                                                <div>
                                                    <span><input type="submit" value="Sim" class="d"></span>
                                                    <span class="notButton">Não</span>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<style>
    .alert {
        width: 300px;
        height: 100px;
        display: flex;
        flex-direction: column;
        background-color: silver;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;


        display: none;
    }

    .alert span {
        background-color: cyan;
        padding: 5px 8px;
        cursor: pointer;
        border-radius: 8px;
    }

    .alert h1 {
        font-size: 22px;
    }

    .alert div {
    }
</style>
<script>
    const deleteButton = document.querySelector('.d');
    const notButton = document.querySelector('.notButton');
    const form = document.querySelector('form[class="delete"]');
    const alert = document.querySelector('.alert');


    notButton.addEventListener('click', () => {
        alert.style.display = 'none';
    })

    form.addEventListener('submit', (event) => {
        alert.style.display = 'block';
        event.preventDefault();
        deleteButton.addEventListener('click', () => {
            form.submit();
        })
    });

    // deleteButton.addEventListener('click', (event) => {
    //     evnet.preventDefault();
    // });
</script>
</html>
