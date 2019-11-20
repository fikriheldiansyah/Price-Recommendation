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
<form class="needs-validation" novalidate>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      <div class="valid-feedback">
        Looks good!
      </div>
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

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection