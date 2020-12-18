@extends('layouts.seller')

@section('content')
<br><br>
<br>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4" >
    @foreach($liat as $produk)
      <div class="col">
        <div class="card h-100">
          <img src="{{ URL::to('/')}}/images/{{ $produk->image}}"  class="card-img-top" style="height:300px;width:350px;">
            <div class="card-body">
              <h1 class="card-text">Nama Produk {{ $produk->nama_produk}}</h1>
              <b class="card-text">Harga Produk {{ $produk->harga_produk}}</b>
              <p class="card-text">Detail Bahan {{ $produk->bahan}}</p>
            </div>
          <div align="left">
            <a href="{{ route('seller.katalog.edit',$produk->id)}}" class="btn btn-primary">edit</a>
          </div>
          <form action="{{ route('seller.katalog.destroy', $produk->id)}}" method="get">
            @csrf
            <button type="submit"class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    @endforeach
    </div>
</div>
@endsection
