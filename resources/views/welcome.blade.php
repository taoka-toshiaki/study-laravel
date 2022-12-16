<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravelら！</title>
</head>
<style>
    body{
        background-color: #1d1c1c;
        color:#fff;
    }
</style>
<body>
    <h1>Laravelら！</h1>
    {{Form::open()}}
        {{ Form::text("name","", ['id' => 'id_name', 'size' => 50, 'maxlength' => 10]) }}
    {{Form::close()}}
</body>
</html>