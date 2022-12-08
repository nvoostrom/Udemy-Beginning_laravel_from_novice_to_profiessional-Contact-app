<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Single contact</h1>
    <a href="{{ route('contacts.index') }}">go back</a>
    <div>
        <p>contact name is {{ $contact['name'] }}</p>
        <p>contact phone is {{ $contact['phone'] }}</p>
    </div>
</body>
</html>