@extends("hello.layouts")
@section("title","hello page")
@section('name')
    @parent
    後から追記
@endsection
@section('loop')
    @foreach($data as $item)
    @if ($loop->first)
        <ul>
    @endif
    <li>{{ $loop->iteration }}--{{ $item }}</li>
    @if($loop->last)
        </ul>
    @endif
    @endforeach
@endsection