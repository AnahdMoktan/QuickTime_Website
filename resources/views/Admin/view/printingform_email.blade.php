<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing Form | Email</title>
</head>
<body>
    <h2>Hello Admin,</h2><br>
    You received an email from : {{ $name }} <br>
    Here are the details of ordered goods: <br>
     <b>Product Name:</b> {{ $product }} <br>
    <b>Category:</b> {{ $category }} <br>
    <b>Size:</b> {{ $size }} <br>
    <b>Color:</b> {{ $color }} <br>
    <b>Paper Weight:</b> {{ $paperweight }} <br>
    <b>Lamination:</b> {{ $lamination }} <br>
    <b>Quantity:</b> {{ $quantity }} <br>
   
    <p>
        The details of orderer are:
    </p><br>
    <b>Name:</b> {{ $name }} <br>
    <b>Company Name:</b> {{ $company_name }} <br>
    <b>Address:</b> {{ $address}} <br>
    <b>Contact:</b> {{ $contact }} <br>
    <b>E-mail Address:</b> {{ $email }} <br>
    <b>Message:</b> {{ $bodyMessage }} <br>
    Thank You!
    
</body>
</html>