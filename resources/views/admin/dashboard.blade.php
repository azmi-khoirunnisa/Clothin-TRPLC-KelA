@extends('layouts.admin')

@section('content')
<br>
<div class="container">
    <div class="row justify">
        <div align="left">
          <a href="{{ route('user.create')}}" class="btn btn-primary">Tambah Admin</a>
        </div>
        <div class="col-md-8">
            <div class="card">
            </div>
        </div>
      </div>
</div>
@endsection
