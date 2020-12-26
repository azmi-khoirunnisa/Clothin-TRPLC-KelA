<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data_transaksi;
use App\data_pesanan;
use Auth;
use App\User;
use Alert;

class pesananController extends Controller
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
        $pesanan = data_pesanan::all();
        $data_transaksi = data_transaksi::all();
        //dd($pesanan);
        return view('seller.pesanan',compact('pesanan','data_transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'harga_pesanan'  =>  'required|numeric',
          'no_rek'        =>  'required|numeric',


      ]);

      $user = Auth::user();

      $form_data = array(
        'harga_pesanan'   => $request->harga_pesanan,
        'no_rek'          => $request->no_rek,
        'id_data_pesanan' => $request->id_data_pesanan,
        'id_user'         => $user->id

      );

      //$data = $request->all();
      //dd($data);
      data_transaksi::create($form_data);
      return redirect('seller/pesanan')->with('success', 'Berhasil Menerima Pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = data_pesanan::find($id);
        return view ('seller.terima_pesanan', compact('pesanan'));
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

}
