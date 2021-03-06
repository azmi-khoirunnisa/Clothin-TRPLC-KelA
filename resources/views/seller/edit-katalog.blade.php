@extends('layouts.seller')

@section('content')
<br>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
  </ul>
</div>
@endif

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produk Anda</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('seller.katalog.update',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                    

                        <div class="form-group row">
                            <label for="nama_produk" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                            <div class="col-md-6">
                                <input id="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ $data->nama_produk }}" required autocomplete="nama_produk" autofocus>

                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga_produk" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga_produk" type="text" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk" value="{{ $data->harga_produk }}" required autocomplete="harga_produk" autofocus>

                                @error('harga_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bahan" class="col-md-4 col-form-label text-md-right">{{ __('Bahan') }}</label>

                            <div class="col-md-6">
                                <input id="bahan" type="text" class="form-control @error('bahan') is-invalid @enderror" name="bahan" value="{{ $data->bahan }}" required autocomplete="bahan" autofocus>

                                @error('bahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">Select Image</label>
                            <div class="col-md-6">
                              <input type="file" name="image" />
                              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $data->image }}" /
                            </div>

                          </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
                                <a href="{{ route('seller.katalog')}}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
