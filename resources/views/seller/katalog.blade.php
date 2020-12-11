@extends('layouts.seller')

@section('content')
<br><br>
<div align="left">
  <a href="{{ route('seller.katalog')}}">Tambah Produk</a>
</div>
<div class="container">
      <div class="card" style="width: 18rem;"  align="center" >
          <img src="" class="card-img-top">
          <div class="card-body">
            <h1 class="card-text">Nama Produk</h1>
            <b class="card-text">Harga Produk</b>
            <p class="card-text">Detail Bahan</p>
          </div>
          <div align="left">
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-danger">hapus</a>
          </div>

          </div>
      </div>

</div>

@endsection
