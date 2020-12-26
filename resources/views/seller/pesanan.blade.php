@extends('layouts.seller')

@section('content')

<div class="container" style="margin-top:40px;">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <table>
                <tr align="center">
                  <th width="10%">Id Pemesanan</th>
                  <th width="15%">Model Desain</th>
                  <th width="10%">Lingkar Badan</th>
                  <th width="15%">Lingkar Pinggul</th>
                  <th width="10%">Panjang Badan</th>
                  <th width="10%">Lebar Leher</th>
                  <th width="15%">Alamat Pengiriman</th>
                  <th width="25%">Order</th>

                </tr>
                @foreach($pesanan as $pesanan)
                <tr align="center">
                  <td>{{ $pesanan->id_data_pesanan}}</td>
                  <td><img src="{{ URL::to('/')}}/images/{{ $pesanan->model_desain}}" class="img-thumbnail" width="75" /></td>
                  <td>{{ $pesanan->lingkar_badan}}</td>
                  <td>{{ $pesanan->lingkar_pinggul}}</td>
                  <td>{{ $pesanan->panjang_badan}}</td>
                  <td>{{ $pesanan->lebar_leher}}</td>
                  <td>{{ $pesanan->alamat_pengiriman}}</td>
                  <td>
                    <a href="{{ route('seller.terima_pesanan', $pesanan->id_data_pesanan)}}" class="btn btn-primary btn-sm">Terima Pesanan</a>
                    <a href="#" class="btn btn-secondary btn-sm">Tolak Pesanan</a>
                  </td>
                </tr>
                @endforeach
               </table>
          </div>
      </div>
  </div>
<br>
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <table>
                <tr align="center">
                  <th width="10%">Id Data Pemesanan</th>
                  <th width="10%">Harga Pesanan</th>
                  <th width="15%">Nomer Rekening</th>
                  <th width="20%">Resi</th>
                </tr>
                @foreach($data_transaksi as $transaksi)
                <tr align="center">
                  <td>{{ $transaksi->id_data_pesanan}}</td>
                  <td>{{ $transaksi->harga_pesanan}}</td>
                  <td>{{ $transaksi->no_rek}}</td>
                  <td>
                    <a href="{{ route('seller.resi', $transaksi->id_data_transaksi)}}" class="btn btn-danger btn-sm">No resi</a>
                  </td>
                </tr>
                @endforeach
               </table>
          </div>
      </div>
  </div>
</div>

@endsection
