<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form  action="/token" method="POST">

    Name<input type="text" name="Name"><br><br>
    Text<textarea></textarea><br><br>
    <!--<input type="hidden" name="_method" value="PUT">-->
    <input type="hidden" name="_token" value="{{ csrf_token()}}">

    <input type="submit" >
</form>

</body>
</html>