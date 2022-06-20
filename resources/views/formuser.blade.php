@extends('layouts/main')
@section('content')
     <div class="container-fluid mt-4 rounded">
         <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group w-25">
            <label>NIK</label>
            <input type="number" name="nik_user" class="form-control" placeholder="Masukkan NIK Anda" required>
        </div>
        <div class="form-group w-25">
            <label>Nama Pengguna</label>
            <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Anda" required>
        </div>
        <div class="form-group w-25">
            <label>No Handphone</label>
            <input type="number" name="hp" class="form-control" placeholder="Masukkan Nomer HP Anda" required>
        </div>
        <div class="form-group w-25">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="simpan" class="btn btn-outline-primary">
        </div>
</form>
</div>
@stop