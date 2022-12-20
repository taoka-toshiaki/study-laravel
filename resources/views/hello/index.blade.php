@extends("hello.layouts")
@section("title","hello page")

@section('frm')
{{ $view_msg }}
<form action="/hello/{{ $id }}/{{ $pass }}" method="post">
    {{ csrf_field() }}
    <input class="form-control" type="text" name="txt">
    <button class="btn btn-primary" type="submit">Text</button>
</form>    
@endsection

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

@section('list')
@foreach($data4 as $key=>$item4)
<ul>
    <li>{{ $key }}=>{{ $item4 }}</li>
</ul>
@endforeach
@endsection