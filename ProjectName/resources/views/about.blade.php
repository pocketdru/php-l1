@extends("layout")

@section("title")
  About me
@stop

@section("content")
  <h1>Blah blaaah</h1>
  <hr>
  <p>
    My name is {{ $first_name }} {{ $last_name }}
    <a href="mailto: {{ $email }}">{{ $email }}</a>
  </p>
@stop 