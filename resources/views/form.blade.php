@extends('layouts/main')
@section('content')
     <div class="container-fluid mt-4 rounded">
         <form action="/mhs/simpan" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM Anda" required>
        </div>
        <div class="form-group w-25">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required>
        </div>
        <label>Gender</label>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="Male" class="form-check-input" >
            <label>Male</label>
        </div>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="Female" class="form-check-input" >
            <label>Female</label>
        </div>
        <div class="form-group-25">
            <label>Jurusan</label>
            <select name="jrsn" class="form-control">
                <option value="0"> Pilihlah Jurusan Anda </option>
                <option value="Teknologi Informasi"> Teknologi Informasi </option>
                <option value="Akuntansi"> Akuntansi </option>
                <option value="Biologi"> Biologi </option>
                <option value="Kedokteran"> Kedokteran </option>
                <option value="Keperawatan"> Keperawatan </option>
                <option value="Teknik"> Teknik </option>
            </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Olahraga" class="form-check-input">
            <label>Olahraga</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Kesenian" class="form-check-input">
            <label>Kesenian</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Kesehatan" class="form-check-input">
            <label>Kesehatan</label>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="simpan" class="btn btn-outline-primary">
        </div>
</form>
</div>
@stop