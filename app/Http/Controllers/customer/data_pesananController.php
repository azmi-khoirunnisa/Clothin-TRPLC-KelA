<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\toko;
use App\data_pesanan;
use App\data_transaksi;
use App\review;
use Auth;
use Alert;

class data_pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customer.data_pesanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $messages = [
        'required' => "data wajib diisi",
      ];

      $validator = $request->validate([
          'jenis_kain'           =>  'required|string',
          'model_desain'         =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'lingkar_badan'        =>  'required|numeric',
          'lingkar_pinggul'      =>  'required|numeric',
          'panjang_badan'        =>  'required|numeric',
          'lebar_leher'          =>  'required|numeric',
          'alamat_pengiriman'    =>  'required|string'
      ],$messages);

      $image = $request->file('model_desain');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);

    /*  $gambar = $request->file('bukti_pembayaran');

      $evidence = rand() . '.' . $gambar->getClientOriginalExtension();
      $gambar->move(public_path('image'), $evidence);*/

      $user = Auth::user();

      $form_data = array(
        'jenis_kain'      => $request->jenis_kain,
        'model_desain'    => $new_name,
        'lingkar_badan'   => $request->lingkar_badan,
        'lingkar_pinggul' => $request->lingkar_pinggul,
        'panjang_badan'   => $request->panjang_badan,
        'lebar_leher'     => $request->lebar_leher,
        'alamat_pengiriman' => $request->alamat_pengiriman,
        'toko_id'         => $request->toko_id,
        'id_user'         => $user->id

      );

        //$form_data = $request->all();
        //dd($form_data);


        data_pesanan::create($form_data);
        return redirect('customer/toko')->with('success', 'Berhasil Menambahkan Data, Tunggu proses Verifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pesanan()
    {
      $pesanan = data_pesanan::all();
      $transaksi = data_transaksi::all();
      return view ('customer.pesanan',compact('pesanan','transaksi'));
    }

    public function riwayat()
    {
      $pesanan = data_pesanan::all();
      $transaksi = data_transaksi::all();
      return view ('customer.review',compact('pesanan','transaksi'));
    }

    public function review($id)
    {
      $pesanan= data_pesanan::findOrFail($id);
      //dd($data,$produk);
      return view('customer.create_review', compact('pesanan'));
    }
    public function upload_review()
    {
      $messages = [
        'required' => "data wajib diisi",
      ];

      $validator = $request->validate([
          'review_pemesanan'           =>  'required|string',

      ],$messages);


      $form_data = array(
        'review_pemesanan'      => $request->review_pemesanan,
        'id_data_pesanan'         => $request->id_data_pesanan

      );

        //$form_data = $request->all();
        //dd($form_data);
        review::create($form_data);
        return redirect('customer\riwayat')->with('success', 'Berhasil Menambahkan Data, Tunggu proses Verifikasi');
    }
}
