@extends('layouts.seller')

@section('content')

@if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
   <br>
   <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">Edit Your Data</div>

              <div class="card-body">
            <form method="post" action="{{ route('seller.deskripsi_toko.update', $data->id) }}">
               @csrf
               
                  <div class="form-group row">
                    <label for="nama_toko" class="col-md-4 col-form-label text-md-right">Nama Toko</label>
                      <div class="col-md-6">
                        <input type="text" name="nama_toko" value="{{ $data->nama_toko }}" class="form-control input-lg" />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="deskripsi_toko" class="col-md-4 text-right">Deskripsi</label>
                        <div class="col-md-8">
                          <input type="text" name="deskripsi_toko" value="{{ $data->deskripsi_toko }}" class="form-control input-lg" />
                        </div>
                    </div>

                  <div class="form-group text-center">
                    <input type="submit" name="simpan" class="btn btn-primary input-lg" value="Simpan" />
                    <a href="{{ route('seller.kelola_toko')}}" class="btn btn-default">Back</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
