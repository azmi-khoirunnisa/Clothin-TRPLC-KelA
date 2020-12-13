@extends('layouts.seller')

@section('content')
<br>
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Deskripsi Toko</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('seller.deskripsi_toko.store')}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="nama_toko" class="col-md-4 col-form-label text-md-right">{{ __('Nama Toko') }}</label>

                            <div class="col-md-6">
                                <input id="nama_toko" type="text" class="form-control @error('nama_toko') is-invalid @enderror" name="nama_toko" value="{{ old('nama_toko') }}" required autocomplete="nama_toko" autofocus>

                                @error('nama_toko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi_toko" class="col-md-4 col-form-label text-md-right">{{ __('Deksripsi Toko') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi_toko" type="text" class="form-control @error('deskripsi_toko') is-invalid @enderror" name="deskripsi_toko" value="{{ old('deskripsi_toko') }}" required autocomplete="deskripsi_toko" autofocus>

                                @error('deskripsi_toko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
                                <a href="{{ route('seller.kelola_toko')}}"class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
