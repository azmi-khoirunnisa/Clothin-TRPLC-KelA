@extends('layouts.seller')

@section('content')


@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="container" style="margin-top:80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Harga</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('seller.terima_pesanan.store')}}">
                        @csrf
                          <div class="form-group row">
                            <label for="harga_pesanan" class="col-md-4 col-form-label text-md-right">{{ __('Harga Pesanan') }}</label>

                            <div class="col-md-6">
                                <input id="harga_pesanan" type="text" class="form-control @error('harga_pesanan') is-invalid @enderror" name="harga_pesanan" value="{{ old('harga_pesanan') }}" required autocomplete="harga_pesanan" autofocus>

                                @error('harga_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_rek" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Rekening') }}</label>

                            <div class="col-md-6">
                                <input id="no_rek" type="text" class="form-control @error('no_rek') is-invalid @enderror" name="no_rek" value="{{ old('no_rek') }}" required autocomplete="no_rek" autofocus>

                                @error('no_rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="id_data_pesanan" value="{{ $pesanan->id_data_pesanan}}">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="simpan" class="btn btn-primary input-lg" value="simpan" />
                                <a href="{{ route('seller.pesanan')}}" class="btn btn-warning">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
</div>

@endsection
