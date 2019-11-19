@extends('layout/main')
@section('title','Result')
<style>
    .form-group{
        width:300px;
        position : relative;
        left:20%;
        padding:3px;
    }
    .h2{
          font-family:sans-serif;
          color : whitesmoke;
          text-align:center;

        }
    .media{

    }
</style>
@section('container')
<div class="media">
  <img src="/css/bisnis.jpg" class="align-self-center mr-3" alt="...">
  <div class="media-body">
    <h2 class="mt-0">PRODUK</h2>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Harga</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Harga Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Kategori</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kategori Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Tahun</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tahun Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Kondisi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kondisi Barang">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Deskripsi</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi Barang">
  </div>
  <div class="form-group">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
  <a href="/welcome">
  <button type="button" class="btn btn-secondary">Reupload</button>
  </a>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
  <a href="/">
  <button type="button" class="btn btn-primary">Finish/Logout</button>
  </a>
  </div>
</form>
  </div>
</div>
@endsection