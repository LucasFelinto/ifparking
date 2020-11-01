<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>Home</title>
  <link rel="stylesheet" href={{ asset('css/variables.css') }}>
  <link rel="stylesheet" href={{ asset('css/reset.css') }}>
  <link rel="stylesheet" href={{ asset('css/typography.css') }}>
  <link rel="stylesheet" href={{ asset('css/nav.css') }}>
  <link rel="stylesheet" href={{ asset('css/parking.css') }}>
</head>
<body>
    <div>
        @foreach ($parkings as $parking)
            <h1 class="secondary-title maring-bottom-m">Parking {{ $parking->name }}</h1>
        @endforeach
        <div class="parking">
            @foreach ($zones as $zone)
                <div class="zone">
                    <span class="zone__number">{{ $zone->number }}</span>
                </div>
            @endforeach
        </div>
            </div>
    <nav class="nav">
        <div class="nav__container">
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
        
                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                        {{ __('SAIR') }}
                    </x-jet-dropdown-link>
                </form>
            </div>
            <div>
                <a class="dropdown-item" href="{{ route('vehicles.index')}}">VER SEUS VEÍCULOS</a>
            </div>
        </div>
    </nav>
</body>
</html>
