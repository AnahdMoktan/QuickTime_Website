<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>

    <h2>Hello Admin,</h2><br>
    You received an email from : {{ $name }} <br>
    Here are the details: <br>
    <b>Name:</b> {{ $name }} <br>
    <b>E-mail:</b> {{ $email }} <br>
    <b>Contact:</b> {{ $contact }} <br>
    <b>Website:</b> {{ $website }} <br>
    <b>Message:</b> {{ $bodyMessage }} <br>
    Thank You!
    
</body>
</html>