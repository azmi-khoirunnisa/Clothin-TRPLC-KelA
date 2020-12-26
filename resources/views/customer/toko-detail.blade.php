@extends('layouts.customer')

@section('content')

<div class="container" style="margin-top:5rem;">
  <div class="card">
    <img src="{{URL::asset('/image/toko-Page-3.png')}}" class="card-img"/>
      <div class="card-img-overlay">
        <h1 class="card-title" style="color:blue;text-align:left;font-family:garamond;font-size:80px;">{{$data->nama_toko}}</h1>
          <p class="card-text" style="color:blue;text-align:left;font-family:garamond;font-size:40px;">{{$data->deskripsi_toko}}</p>
          <button type="button" class="btn btn-primary btn-floating" style="margin-top:150px;">
            <i class="fas fa-comment fa-lg"> Chat</i>
          </button>
          <a href="{{ route('customer.datapesanan.index', $data->id)}}" class="btn btn-secondary" style="margin-top:150px;margin-left:30px;">Pesan</a>
      </div>
  </div><br>
  <div class="row row-cols-1 row-cols-md-3 g-4" >
    @foreach ($produk as $produk)
      <div class="col">
        <div class="card h-100">
          <img src="{{ URL::to('/')}}/images/{{ $produk->image}}"  class="card-img-top" style="height:300px;width:350px;">
            <div class="card-body">
              <h1 class="card-text"><b>Nama Produk {{ $produk->nama_produk}}</b></h1>
              <b class="card-text">Harga Produk Rp {{ $produk->harga_produk}} </b>
              <p class="card-text">Detail Bahan {{ $produk->bahan}}</p>
            </div>
        </div>
      </div>
    @endforeach
    </div>
</div>
@endsection
