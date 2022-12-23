<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($items as $item)
        {{ $item->getData() }}<br>
        {{ $item->id }}<br>
        {{ $item->name }}<br>
        {{ $item->mail }}<br>
        {{ $item->age }}<br>

    @endforeach
</body>
</html>