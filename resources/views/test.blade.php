<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($cart as $id => $item)
    <h2>{{$item['Name']}}</h2>
    <h2>{{$item['Price']}}</h2>
        
    @endforeach
</body>
</html>