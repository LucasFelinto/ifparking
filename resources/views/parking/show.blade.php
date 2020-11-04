<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{$parking->name}}
  <form action="">
    @foreach ($parking->zones as $zone)
        {{$zone->number}}
        <input type="radio" value={{$zone->id}} id={{$zone->id}} name="zone">
    @endforeach
  </form>
</body>
</html>