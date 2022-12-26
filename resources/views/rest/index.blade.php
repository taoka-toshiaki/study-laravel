<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body,a,a:hover{
            background-color: black;
            color:darkturquoise;
        }
    </style>
</head>
<body>
    @if (count($items))
    <ul>
    @foreach ($items as $item)
        <li><a href="{{ $item->url }}">{{ $item->message }}</a></li>
    @endforeach        
    </ul>
    {{ $items->links() }}
    @endif
</body>
</html>