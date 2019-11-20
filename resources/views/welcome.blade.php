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
 <h2 class='h2'>Welcome,{{Session::get('name')}}<a href="/">.Logout?</a>
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
    <label for="formGroupExampleInput">Deskripsi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Deskripsi Barang">
  </div>
  <div class="form-group">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"></label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Kondisi</option>
        <option value="1">Baru</option>
        <option value="2">Bekas</option>
      </select>
    </div>
  </div>
  </div>
  <div class="form-group">
  <a href="/result">
      <button type="submit" class="btn btn-primary">Submit</button>
  </a>
  </div>
</form>
@endsection