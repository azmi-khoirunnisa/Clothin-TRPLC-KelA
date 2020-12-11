@extends('layouts.seller')

@section('content')
<br>
<br>
<div align="left">
  <a href="{{ route('seller.deskripsi_toko')}}" class="btn btn-primary">Deskripsi Toko</a>
  <a href="{{ route('seller.katalog')}}" class="btn btn-danger" align="right">Katalog</a>
</div>
</div>
<div class="container">
      <div class="card" style="width: 70rem;" align="center">
          <div class="card-body">
            <h1 class="card-text">Nama Toko </h1>
            <b class="card-text">Deskripsi Toko</b>
          </div>
      </div>
</div>

@endsection
