<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>Hello world</h1> -->

    <!-- dati del utente -->
    <h2>Utente:</h2>
    <p>Nome: {{ $user['name'] }}</p>

    <h3>Hobbies:</h3>
    <ul>
        <!-- ciclo foreach di hobbies -->
        @foreach($hobbies as $hobbie)
        <li>{{$hobbie}}</li>
        @endforeach
    </ul>
</body>

</html>