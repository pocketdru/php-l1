@extends("layout")

@section("title")
  About me
@stop

@section("content")
  <h1>Blah blaaah</h1>
  <hr>
  <div>
    <h3>Our names are:</h3>
    <ul class="list-group">
      @foreach($full_names as $full_name)
        <li class="list-group-item">{{ $full_name }}</li>
        @endforeach
    </ul>
  </div>
  <div>
    <h3>Our emails are:</h3>
    <ul class="list-group">
      @foreach($emails as $email)
        <li class="list-group-item">{{ $email }}</li>
        @endforeach
    </ul>
  </div>
@stop 