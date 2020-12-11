@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You Can Edit Your Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id_user) }}">
                    @method('PUT');
                    @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $user->nama }}" aria-describedby="nameHelp" placeholder="Enter Nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                              <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ $user->tempat_lahir }}" aria-describedby="tempat_lahirlHelp" placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" aria-describedby="dateHelp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" aria-describedby="emailHelp">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                              <div class="form-group row">
                                      <label for="noHp" class="col-md-4 col-form-label text-md-right">{{ __('No Handphone') }}</label>

                                      <div class="col-md-6">
                                          <input id="noHp" type="text" class="form-control" name="noHp" value="{{ $user->noHp }}" aria-describedby="noHpHelp">
                                      </div>
                                  </div>

                        <div class="form-group row">
                          <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin')}}</label>

                          <div class="col-md-6">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="{{ $user->jenis_kelamin}}" checked>
                              <label class="form-check-input" for="jenis_kelamin">Laki - laki </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="$user->jenis_kelamin" checked>
                              <label class="form-check-input" for="jenis_kelamin">Perempuan </label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ $user->password}}">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                  <button class="btn btn-primary" type="submit">Submit</button></a>
                          <!--  </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> !-->
                            <a href="{{route('users.index')}}">
                              <button class="btn btn-primary">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
