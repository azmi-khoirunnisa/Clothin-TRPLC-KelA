@extends('layouts.seller')

@section('content')
<br>
<br>
  @foreach ($toko as $data)

<div class="container">
<div class="card bg-white text-white">
  <img src="{{URL::asset('/image/toko-Page-1.png')}}" class="card-img"/>
  <div class="card-img-overlay">
    <h1 class="card-title" style="color:black;text-align:right;font-family:Lucida Sans;">{{$data->nama_toko}}</h1>
    <p class="card-text" style="color:black;text-align:right;">
    {{$data->deskripsi_toko}}
    </p>
    <div align="right" style="margin-top:10rem;">
      <a href="{{ route('seller.deskripsi_toko.edit', $data->id)}}" class="btn btn-outline-light">Ubah Deskripsi Toko</a>
    </div>
  </div>
</div>
@endforeach
</div>
<div align="center">
  <a href="{{ route('seller.deskripsi_toko.create')}}" class="btn btn-primary">Deskripsi Toko</a>
  <a href="{{ route('seller.deskripsi_toko.show',$data->id)}}" class="btn btn-danger" align="right">Buat Katalog</a>
  <a href="{{ route('seller.katalog')}}" class="btn btn-warning">Katalog</a>
</div>
@endsection
