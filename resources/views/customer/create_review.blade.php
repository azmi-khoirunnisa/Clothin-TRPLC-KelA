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
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="review_pemesanan" class="col-md-4 col-form-label text-md-right">Beri Review</label>

                            <div class="col-md-6">
                                <input id="review_pemesanan" type="text" class="form-control @error('review_pemesanan') is-invalid @enderror" name="review_pemesanan" value="{{ old('review_pemesanan') }}" required autocomplete="review_pemesanan" autofocus>

                                @error('review_pemesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="id_data_pesanan" value="{{ $pesanan->id_data_pesanan}}">

                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="simpan" class="btn btn-primary input-lg" value="Simpan" />
                                <a href="" class="btn btn-secondary">Batal</a>
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
