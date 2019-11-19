@extends('layout/main')
@section('title','Signup')
<style>
    .form-group{
        width:800px;
        position : relative;
        left:30%;
        padding:3px;
    }
</style>
@section('container')
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName3" class="col-sm-3 col-form-label">Username</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName3" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
  <a href="/">
      <button type="submit" class="btn btn-primary">Sign Up</button>
  </a>
    </div>
  </div>
</form>
@endsection