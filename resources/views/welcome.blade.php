@extends('layout/main')

@section('title','Welcome')
<style>
    .form-group{
        width:800px;
        position : relative;
        left:30%;
        padding:3px;
    }
    .h2{
          font-family:sans-serif;
          color : whitesmoke;
          text-align:center;

        }
</style>
   
@section('container')
 <h2 class='h2'>Welcome, User<a href="/">.Logout?</a>
 </h2>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Kategori</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Kategori Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Tahun</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tahun Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Kondisi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Kondisi Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Deskripsi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Deskripsi Barang">
  </div>
  <div class="form-group">
  <a href="/result">
  <button type="submit" class="btn btn-primary">submit</button>
  </a>
  </div>
</form>
@endsection