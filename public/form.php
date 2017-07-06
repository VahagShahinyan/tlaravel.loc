<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<form  action="/comments" method="POST">

    Name<input type="text" name="Name"><br><br>
    Text<textarea></textarea><br><br>
    <!--<input type="hidden" name="_method" value="PUT">-->
<!--    <input type="hidden" name="_token" value="I1N9yCQ4chL9m2lx0qLwgq0FbeLggnOISsenZrne">-->
    <input type="submit" value="Send" >



</form>

</body>
</html>