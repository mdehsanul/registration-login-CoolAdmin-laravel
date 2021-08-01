<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>welcome to our website, {{ $user->username }}</h2>
    <p>click <a href="{{ url('verify/' . $user->verifyUser->token) }}">here</a> to verify your email address</p>
</body>

</html>
