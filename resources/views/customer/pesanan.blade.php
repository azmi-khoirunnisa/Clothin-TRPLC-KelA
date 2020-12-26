@extends('layouts.customer')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
          @foreach($pesanan as $pesanan)
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th scope="row" align="center">Jenis Kain</th>
                    <td> {{ $pesanan->jenis_kain}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Model Desain</th>
                    <td><img src="{{ URL::to('/')}}/images/{{ $pesanan->model_desain}}"  class="img-thumbnail"></td>
                  </tr>
                  <tr>
                    <th scope="row">Lingkar Badan</th>
                    <td>{{ $pesanan->lingkar_badan}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Lingkar Pinggul</th>
                    <td>{{ $pesanan->lingkar_pinggul}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Panjang Badan</th>
                    <td>{{ $pesanan->panjang_badan}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Lebar Leher</th>
                    <td>{{ $pesanan->lebar_leher}}</td>
                  </tr>
          @endforeach

          @foreach($transaksi as $transaksi)
          <tr>
            <th scope="row" align="center">Harga</th>
            <td> {{ $transaksi->harga_pesanan}}</td>
          </tr>
          <tr>
            <th scope="row">No Rekening</th>
            <td>{{ $transaksi->no_rek}}</td>
          </tr>
          @endforeach
              </tbody>
              </table>

              </div>
</div>
            </div>
          </div>

@endsection
