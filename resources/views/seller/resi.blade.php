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
                <div class="card-header">Masukkan Nomor Resi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('seller.resi.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="no_resi" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Resi') }}</label>

                            <div class="col-md-6">
                                <input id="no_resi" type="text" class="form-control @error('no_resi') is-invalid @enderror" name="no_resi" value="{{ old('no_resi') }}" required autocomplete="no_resi" autofocus>

                                @error('no_resi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="id_data_transaksi" value="{{ $transaksi->id_data_transaksi}}">
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
