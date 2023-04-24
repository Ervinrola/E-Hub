<!doctype html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/contactPage.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <p><strong>Name:</strong>{{ $dataReceived['name'] }}</p>
    <p><strong>Email:</strong>{{ $dataReceived['email'] }}</p>
    <br>
    <h2>Message</h2>
    {{ $dataReceived['message'] }}
</body>
</html>