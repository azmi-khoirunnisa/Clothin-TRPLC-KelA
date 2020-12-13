<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\toko;
use App\produk;
use Auth;
class katalogController extends Controller
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
      $hasil = produk::all();
      //dd($hasil);
      return view ('seller.katalog', ['liat'=>$hasil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('seller.create-katalog');
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
          'nama_produk'   =>  'required|alpha',
          'harga_produk'  =>  'required|numeric',
          'bahan'         =>  'required|alpha',
          'image'         =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

      ]);


      $image = $request->file('image');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);
      $user = Auth::user();
      $form_data = array(
        'nama_produk'     => $request->nama_produk,
        'harga_produk'    => $request->harga_produk,
        'bahan'           => $request->bahan,
        'image'           => $new_name,
        'toko_id'         => $request->toko_id,
        'user_id'         => $user->id

      );

    //  $data = $request->all();
    //  dd($data);
      produk::create($form_data);
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $toko = toko::find($id);
     return view('seller.create-katalog', compact('toko'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = produk::findOrFail($id);
      return view('seller.edit-katalog', compact('data'));
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
       $image_name = $request->hidden_image;
       $image = $request->file('image');
       if($image != '')
       {
           $request->validate([
               'nama_produk'              =>  'required',
               'image'                    =>  'image|max:2048',
               'harga_produk'             =>  'required',
               'bahan'                    =>  'required'
           ]);

           $image_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('images'), $image_name);
       }
       else
       {
           $request->validate([
               'nama_produk'            =>  'required',
               'harga_produk'           =>  'required',
               'bahan'                  => 'required'
           ]);
       }

       $form_data = array(
           'nama_produk'                =>   $request->nama_produk,
           'image'                      =>   $image_name,
           'harga_produk'               =>   $request->harga_produk,
           'bahan'                      =>   $request->bahan

       );

       produk::whereId($id)->update($form_data);

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
      $data =  produk::findOrFail($id);
      $data->delete();

      return redirect()->back();
    }

}
