@extends('layouts.seller')

@section('content')
<br>
<br>
  @foreach ($toko as $data)
<div align="left">
  <a href="{{ route('seller.deskripsi_toko.create')}}" class="btn btn-primary">Deskripsi Toko</a>
  <a href="{{ route('seller.deskripsi_toko.show', $data->id)}}" class="btn btn-danger" align="right">Buat Katalog</a>
  <a href="{{ route('seller.katalog')}}" class="btn btn-warning">Katalog</a>
</div>
</div>
<div class="container">

      <div class="card" style="width: 70rem;" align="center">
          <div class="card-body">
            <h1 class="card-text">{{$data->nama_toko}}</h1>
            <b class="card-text"> {{$data->deskripsi_toko}}</b>
          </div>
          <div align="right">
            <a href="{{ route('seller.deskripsi_toko.edit', $data->id)}}" class="btn btn-success">Ubah Deskripsi Toko</a>
          </div>
      </div>
    @endforeach
</div>
@endsection
