<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vai tomar no cu</h1>
    <form action={{ route('parkings.store') }} method="POST">
        @csrf
        <select name="type_id" id="">
            <option value="1">Carro</option>
            <option value="2">Moto</option>
            <option value="3">Bicicleta</option>
        </select>
        <input type="submit" value="">
    </form>
</body>
</html>
