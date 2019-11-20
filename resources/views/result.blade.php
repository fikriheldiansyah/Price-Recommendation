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
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Tahun</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tas Hijau</td>
      <td>Tas</td>
      <td>2019</td>
      <td>Baru</td>
      <td>100000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tas Selempang</td>
      <td>Tas</td>
      <td>2017</td>
      <td>Bekas</td>
      <td>50000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tas Sekolah</td>
      <td>Tas</td>
      <td>2018</td>
      <td>Bekas</td>
      <td>75000</td>
    </tr>
  </tbody>
</table>
<div class="form-group">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
  <a href="/welcome">
  <button type="button" class="btn btn-secondary">Re-Submit</button>
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