<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('img')}}" method="POST" enctype="multipart/form-data">
     @csrf
    <input type="file" name="file"><br><br>
    <input type="submit" value="upload">
    </form>
</body>
</html>