<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Laravelら！</title>
</head>
<style>
    body{
        background-color: #121b18;
        color:#fff;
    }
</style>
<body>
    <h1>Laravelら！</h1>
    <form method="post" action="/">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="txt" value="{{ old('txt') }}" placeholder="txt"><br>      
        <input class="form-control" type="text" name="mail" value="{{ old('mail') }}"  placeholder="mail"><br>      
        <input class="form-control" type="text" name="age" value="{{ old('age') }}" placeholder="age"><br>      
        <button class="btn btn-primary" type="submit">submit</button>
        {{ $msg }}
        @if(count($errors))
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>
</html>