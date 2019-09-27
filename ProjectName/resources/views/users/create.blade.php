@extends("layout")

@section("title")
Create a user
@stop

@section("content")
<form action="/users" method="post">
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input name="name" class="form-control" id="exampleInputName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button class="btn btn-primary">Submit</button>

  {{ csrf_field() }}
</form>

@stop