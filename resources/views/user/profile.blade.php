@extends('layouts.seller')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th scope="row" align="center">Nama Lengkap</th>
                    <td> {{ $user->nama}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tempat Lahir</th>
                    <td>{{ $user->tempat_lahir}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal Lahir</th>
                    <td>{{ $user->tanggal_lahir}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>{{ $user->jenis_kelamin}}</td>
                  </tr>
                  <tr>
                    <th scope="row">No Handphone</th>
                    <td>{{ $user->noHp}}</td>
                  </tr>
                </tbody>
              </table>
                <div class="form-group text-center">
                  <a href="{{ route('user.edit')}}" class="btn btn-primary">edit</a>
                </div>
              </div>
</div>
            </div>
          </div>

@endsection

<script type="text/javascript">
  document.title = 'profile';
</script>
