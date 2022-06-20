@extends('layouts.main')
@section('content')
<div class="container-fluid mt-4 rounded">
    <form action="/user/updateuser/{{ $user -> id}}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-5">
                <input type="number" name="nik_user" class="form-control" value="{{ $user->nik_user }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Pengguna</label>
            <div class="col-sm-5">
                <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-5">
                <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}" required>
            </div>
        </div>

        <div class="form-group pt-4">
            <input type="submit" value="Simpan" class="btn bg-primary text-white">
        </div>
    </form>
</div>
@endsection
