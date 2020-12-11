<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('daftar_pengguna',['users'=> $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        return view ('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        /*User::create([
          'nama'=>e($request->input('nama')),
          'tempat_lahir'=>e($request->input('tempat_lahir')),
          'tanggal_lahir'=>e($request->input('tanggal_lahir')),
          'email' => e($request->input('email')),
          'jenis_kelamin' => e($request->input('jenis_kelamin')),
          'noHp'=> e($request->input('noHp')),
          'password'=> bcrypt($request->input('password')),
          'role'=> e($request->input('role')),

        ]);*/

      /*  $validatedData = $request->validate([
          'nama' => 'required|alpha|min:4|max:255',
          'tempat_lahir' => 'required|alpha|max:255',
          'tanggal_lahir' => 'required|date_format:d/m/Y',
          'email' => 'required|email|unique:users',
          'jenis_kelamin' => 'required',
          'noHp' => 'required|numeric',
          'password' => 'required|min:8|max:25',
          'confirm_password' => 'required|min:8|max:25|same:password',
          'role' => 'required',

        ]);
        $users = User::create($validatedData);

        return redirect('/users');
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      if (Auth::user()) {
        $user = User::find(Auth::user()->id);

        if ($user){
            return view('user.edit')->withUser($user);
        }else {
            return redirect()->back();
        }

      }else {
        return redirect()->back();
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($user) {
          $user->nama = $request['nama'];
          $user->tempat_lahir = $request['tempat_lahir'];
          $user->tanggal_lahir = $request['tanggal_lahir'];
          $user->email = $request['email'];
        //  $user->jenis_kelamin = $request['jenis_kelamin'];
          $user->noHp = $request['noHp'];
        //  $user->password = $request ['password'];
          $user->save();

          return redirect()->back();
          //return redirect()->route('users.index');
        } else{
          return redirect()->back();
        }

    }

    public function passwordEdi(){

    }
    public function passwordUpdate(){

    }

    public function profile($id){
      $user = User::find($id);

      if ($user) {
        return view('user.profile')->withUser($user);
      }else {
        return redirect()->back();
      }
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
