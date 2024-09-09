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
    <p>{{ $user['name'] }}</p>

    <h3>Hobbies:</h3>
    <ul>
        <!-- ciclo foreach di hobbies -->
        @foreach($hobbies as $hobbie)
        <li>{{$hobbie}}</li>
        @endforeach
    </ul>

    <!-- condizione se l'utente è maggiorenne -->
    @if($user['age'] >= 18)
    <p>L'utente è maggiorenne</p>
    @else
    <p>L'utente è minorenne</p>
    @endif
</body>

</html>