@extends('layouts.customer')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message}}</p>
</div>
@endif

<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <table>
                  <tr align="center">
                    <th width="15%">Nama Toko</th>
                    <th width="20%">Deskripsi</th>
                    <th width="20%">Action</th>
                  </tr>
                  @foreach($toko as $row)
                  <tr align="center">
                    <td>{{ $row->nama_toko}}</td>
                    <td>{{ $row->deskripsi_toko}}</td>
                    <td>
                      <a href="{{ route('customer.toko.show',$row->id)}}" class="btn btn-outline-secondary btn-sm" >Show</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
