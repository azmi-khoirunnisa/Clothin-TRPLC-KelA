@extends('layouts.app')

@section('content')

  <h3>Daftar Pengguna</h3>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Edit</th>
          <th scope="col">Hapus</th>
        </tr>
        <tbody>
          @foreach ($users as $users)
          <tr>
            <td>{{ $users->nama }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->role }}</td>
            <td>
              <a href="{{route('users.edit',$users->id_user)}}"><button
                type="button" class="btn btn-warning">Edit</button></a>
            </td>
            <td>
              <form action="{{route('users.destroy','$users->id_user')}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        <tbody>
      </table>
    <a href="{{route('users.create')}}"><button class="btn btn-primary">Tambah User</button></a>
@endsection
