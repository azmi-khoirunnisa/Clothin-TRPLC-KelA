<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\toko;
use Auth;

class deskripsi_tokoController extends Controller
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
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.deskripsi_toko');
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
          'nama_toko'   => 'required|alpha|max:255',
          'deskripsi_toko' => 'required|alpha|max:255'
        ]);

        $user = Auth::user();
        $form_data = array(
        'nama_toko'     => $request->nama_toko,
        'deskripsi_toko' => $request->deskripsi_toko,
        'user_id' => $user->id
      );

        toko::create($form_data);
        return redirect('seller.deskripsi_toko')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = toko::find($id);
      //dd($data);
      return view('seller.create-katalog', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = toko::findOrFail($id);
        return view('seller.deskripsitoko_edit', compact('data'));
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
        $request->validate([
          'nama_toko' => 'required|alpha',
          'deskripsi_toko' => 'required|string'
        ]);
        $user = Auth::user();
        $form_data = array (
          'nama_toko' => $request->nama_toko,
          'deskripsi_toko' => $request->deskripsi_toko,
        );

        toko::whereId($id)->update($form_data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
