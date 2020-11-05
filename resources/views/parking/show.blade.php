<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<form action={{ route('allocations') }} method="POST">
    @csrf
    @foreach ($parking->zones as $zone)
        {{$parking->name}}-{{$zone->number}}
        <input type="radio" value={{$zone->id}} id={{$zone->id}} name="zone">
    @endforeach
    <button>Enviar</button>
  </form>
</body>
</html>