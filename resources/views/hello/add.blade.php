@extends('hello.layoutsadd')
@section('title','add')

@section('content')
    <table class="table table-dark">
        <form method="post" action="add">
            {{ csrf_field() }}
            <tbody>
                <tr>
                    <td>id:</td>
                    <td><input type="text" name='id' value="{{ old('id') }}"></td>
                </tr>                
                <tr>
                    <td>name:</td>
                    <td><input type="text" name='name'value="{{ old('name') }}"></td>
                </tr>
                <tr>
                    <td>mail:</td>
                    <td><input type="text" name='mail'value="{{ old('mail') }}"></td>
                </tr>
                <tr>
                    <td>age:</td>
                    <td><input type="text" name='age'value="{{ old('age') }}"></td>
                </tr>                                
                <tr>
                    <td>>>:</td>
                    <td><button class="btn btn-primary" type="submit">Add</button></td>
                </tr>                
            </tbody>            
        </form>
    </table>
@endsection

@section('err')
    @if(count($errors))
    <div class="alert alert-warning" role="alert">
        <ul>
        @foreach ($errors->all() as $erritem)
            <li>{{ $erritem }}</li>
        @endforeach
        </ul>
    </div>    
    @endif
@endsection