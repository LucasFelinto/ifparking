<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;700&display=swap" rel="stylesheet">
    <title>IFParking | Seus veículos</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vehicles.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">IFPARKING</a>
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
    <a class="dropdown-item" href="{{ route('vehicles.index')}}">Listar Veiculo</a>
  </div>
</div>
</div>

    <main>
        <ul class="cars-list">
            @foreach ($vehicles as $vehicle)
                <li class="car">
                    <div>
                        <h1 class="model">{{ $vehicle->model }}</h1>
                        <h1 class="board">{{ $vehicle->board }}</h1>
                        <div class="form-wrapper">
                            <button class="button">Selecionar</button>
                            <form class="delete" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="1" name="deleted">
                                <button class="button danger btn-delete">Excluir</button>
                                <!-- <input class="button danger" type="submit" value="Deletar" class=""> -->
                                <div class="alert disable">
                                    <h1>deseja deletar esse carro?</h1>
                                    <div>
                                        <input style="width: 80px;" type="submit" value="Sim" class="d button danger">
                                        <button style="width: 80px; display: inline-block;"
                                            class="not-button button danger">Não</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if ($vehicle->type->name == 'Carro')
                        <svg class="car-svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car"
                            class="svg-inline--fa fa-car fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                            </linearGradient>
                            <path fill="dimgray"
                                d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z">
                            </path>
                        </svg>
                    @endif
                    @if ($vehicle->type->name == 'Moto')
                        <svg class="motorcycle-svg" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="dimgray"
                                d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z">
                            </path>
                        </svg>
                    @endif
                    @if ($vehicle->type->name == 'Bicicleta')
                        <svg class="bike-svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bicycle"
                            class="svg-inline--fa fa-bicycle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path fill="dimgray"
                                d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z">
                            </path>
                        </svg>
                    @endif
                </li>
            @endforeach
            <!-- <li class="car">
                <div>
                    <h1 class="model">CG 160 Titan S</h1>
                    <h1 class="board">QMQ2020</h1>
                    <button class="button">Selecionar</button>
                    <button class="button danger">Excluir</button>
                </div>
                <svg class="motorcycle-svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="dimgray" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z"></path>
                </svg>
            </li>
            <li class="car">
                <div>
                    <h1 class="model">CG 160 Titan S</h1>
                    <button class="button">Selecionar</button>
                    <button class="button danger">Excluir</button>
                </div>
                <svg class="bike-svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bicycle" class="svg-inline--fa fa-bicycle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="dimgray" d="M512.509 192.001c-16.373-.064-32.03 2.955-46.436 8.495l-77.68-125.153A24 24 0 0 0 368.001 64h-64c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h50.649l14.896 24H256.002v-16c0-8.837-7.163-16-16-16h-87.459c-13.441 0-24.777 10.999-24.536 24.437.232 13.044 10.876 23.563 23.995 23.563h48.726l-29.417 47.52c-13.433-4.83-27.904-7.483-42.992-7.52C58.094 191.83.412 249.012.002 319.236-.413 390.279 57.055 448 128.002 448c59.642 0 109.758-40.793 123.967-96h52.033a24 24 0 0 0 20.406-11.367L410.37 201.77l14.938 24.067c-25.455 23.448-41.385 57.081-41.307 94.437.145 68.833 57.899 127.051 126.729 127.719 70.606.685 128.181-55.803 129.255-125.996 1.086-70.941-56.526-129.72-127.476-129.996zM186.75 265.772c9.727 10.529 16.673 23.661 19.642 38.228h-43.306l23.664-38.228zM128.002 400c-44.112 0-80-35.888-80-80s35.888-80 80-80c5.869 0 11.586.653 17.099 1.859l-45.505 73.509C89.715 331.327 101.213 352 120.002 352h81.3c-12.37 28.225-40.562 48-73.3 48zm162.63-96h-35.624c-3.96-31.756-19.556-59.894-42.383-80.026L237.371 184h127.547l-74.286 120zm217.057 95.886c-41.036-2.165-74.049-35.692-75.627-76.755-.812-21.121 6.633-40.518 19.335-55.263l44.433 71.586c4.66 7.508 14.524 9.816 22.032 5.156l13.594-8.437c7.508-4.66 9.817-14.524 5.156-22.032l-44.468-71.643a79.901 79.901 0 0 1 19.858-2.497c44.112 0 80 35.888 80 80-.001 45.54-38.252 82.316-84.313 79.885z"></path>
                </svg>
            </li> -->
        </ul>
    </main>
    <script>
        const deleteButton = document.querySelector('.d');
        const notButtons = document.querySelectorAll('.not-button');
        const forms = document.querySelectorAll('form[class="delete"]');
        const alerts = document.querySelectorAll('.alert');
        const btnsDelete = document.querySelectorAll('.btn-delete');


        btnsDelete.forEach((btnDelete, index) => {
            btnDelete.addEventListener('click', (event) => {
                event.preventDefault();
                document.querySelectorAll('.alert')[index].style.display = 'block';
            });
        });


        notButtons.forEach((notButton, index) => {
            notButton.addEventListener('click', (event) => {
                document.querySelectorAll('.alert')[index].style.display = 'none';
            });
        });

        forms.forEach((form, index) => {
            form.addEventListener('submit', (event) => {
                alerts[index].classList.add('active');
                event.preventDefault();
                deleteButton.addEventListener('click', () => {
                    form.submit();
                })
            });
        });

    </script>

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
=======
>>>>>>> 4b7d19d960d130acbfd8f55d36de8d3196676dbd

</html>
