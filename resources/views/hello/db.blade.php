<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB</title>
</head>
<body>
    @foreach ($items as $item)
        <li>{{ $item->name }}/{{ $item->mail }}/{{ $item->age }}</li>
    @endforeach
</body>
</html>