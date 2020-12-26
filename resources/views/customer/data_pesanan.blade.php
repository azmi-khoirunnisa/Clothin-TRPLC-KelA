@extends('layouts.customer')

@section('content')
<div class="container" style="margin-top:80px;">
  @if($errors->any())
   <div class="alert alert-danger">
     <ul>
       @foreach($errors->all() as $error)
       <li>{{ $error}}</li>
       @endforeach
     </ul>
   </div>
   @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Pesanan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customer.datapesanan.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="jenis_kain" class="col-md-4 col-form-label text-md-right">Jenis Kain</label>

                            <div class="col-md-6">
                                <input id="jenis_kain" type="text" class="form-control @error('jenis_kain') is-invalid @enderror" name="jenis_kain" value="{{ old('jenis_kain') }}" required autocomplete="jenis_kain" autofocus>

                                @error('jenis_kain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">Model Desain</label>
                            <div class="col-md-6">
                              <input type="file" name="model_desain" />
                            </div>

                          </div>

                        <div class="form-group row">
                            <label for="lingkar_badan" class="col-md-4 col-form-label text-md-right">Lingkar Badan</label>

                            <div class="col-md-6">
                                <input id="lingkar_badan" type="text" class="form-control @error('lingkar_badan') is-invalid @enderror" name="lingkar_badan" value="{{ old('lingkar_badan') }}" required autocomplete="lingkar_badan" autofocus>

                                @error('lingkar_badan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lingkar_pinggul" class="col-md-4 col-form-label text-md-right">Lingkar Pinggul</label>

                            <div class="col-md-6">
                                <input id="lingkar_pinggul" type="text" class="form-control @error('lingkar_pinggul') is-invalid @enderror" name="lingkar_pinggul" value="{{ old('lingkar_pinggul') }}" required autocomplete="lingkar_pinggul" autofocus>

                                @error('lingkar_pinggul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="panjang_badan" class="col-md-4 col-form-label text-md-right">Panjang Badan</label>

                            <div class="col-md-6">
                                <input id="panjang_badan" type="text" class="form-control @error('panjang_badan') is-invalid @enderror" name="panjang_badan" value="{{ old('panjang_badan') }}" required autocomplete="panjang_badan" autofocus>

                                @error('panjang_badan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="lebar_leher" class="col-md-4 col-form-label text-md-right">Lebar Leher</label>

                            <div class="col-md-6">
                                <input id="lebar_leher" type="text" class="form-control @error('lebar_leher') is-invalid @enderror" name="lebar_leher" value="{{ old('lebar_leher') }}" required autocomplete="lebar_leher" autofocus>

                                @error('lebar_leher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_pengiriman" class="col-md-4 col-form-label text-md-right">Alamat Pengiriman</label>

                            <div class="col-md-6">
                                <input id="alamat_pengiriman" type="text" class="form-control @error('alamat_pengiriman') is-invalid @enderror" name="alamat_pengiriman" value="{{ old('alamat_pengiriman') }}" required autocomplete="alamat_pengiriman" autofocus>

                                @error('alamat_pengiriman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="toko_id" value="{{ $data->id}}">
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="simpan" class="btn btn-primary input-lg" value="Simpan" />
                                <a href="{{route('customer.toko.show',$data->id)}}" class="btn btn-secondary">Batal</a>
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
