
<form action="/rest" method="post">
{{ csrf_field() }}
message::<input class="form-control" type="text" name="message" value="{{ old('message') }}"><br>
url::<input class="form-control" type="text" name="url" value="{{ old('url') }}"><br>
<button type="submit">submit</button>
</form>
