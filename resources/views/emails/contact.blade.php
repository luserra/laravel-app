<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email contacto</title>
</head>
<body>
    <h1>H E L L O <strong>Recipes World!</strong> TEAM</h1>
    <h2>You have a new message:</h2>

    <p><strong>Name:</strong> {{$contact['name']}}</p>
    <p><strong>Email:</strong> {{$contact['email']}}</p>
    <p><strong>Phone:</strong> {{$contact['phone']}}</p>
    <p><strong>Message:</strong> {{$contact['message']}}</p>

</body>
</html>