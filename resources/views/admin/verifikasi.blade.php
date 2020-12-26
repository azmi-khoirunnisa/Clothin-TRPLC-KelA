@extends('layouts.admin')

@section('content')

<div class="container" style="margin-top:80px;">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">

              <table>
                <tr align="center">
                  <th width="10%">Id Transaksi</th>
                  <th width="25%">Id Pemesanan</th>
                  <th width="25%">Harga Pesanan</th>
                  <th width="25%">Nomer Rekening</th>
                </tr>
                @foreach($data_transaksi as $data_transaksi )
                <tr align="center">
                  <td>{{ $data_transaksi ->id_data_transaksi}}</td>
                  <td>{{ $data_transaksi ->id_data_pesanan}}</td>
                  <td>{{ $data_transaksi ->harga_pesanan}}</td>
                  <td>{{ $data_transaksi ->no_rek}}</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm">Verifikasi Transaksi</a>
                    <a href="#" class="btn btn-secondary btn-sm">Tolak Transaksi</a>
                  </td>
                </tr>
                @endforeach
               </table>
          </div>
      </div>
  </div>
</div>

@endsection
