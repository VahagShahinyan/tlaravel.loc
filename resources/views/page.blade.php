<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>

<form action="/comments" method="post">

    <label>Name: <input type="text" name="name"></label><br><br>
    <label>Text: <textarea name="text"></textarea></label><br>
    <input type="submit">
</form>
</body>
</html>
