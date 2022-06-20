@extends('layouts/main')
@section('content')
     <div class="container-fluid mt-4 rounded">
         @php
            $bmnt = explode(',',$mhs->bidang_mnt);
        @endphp
         <form action="/mhs/update/{{$mhs->id}}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" value="{{ $mhs -> nim }}" readonly>
        </div>
        <div class="form-group w-25">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" value="{{ $mhs -> nama }}"required>
        </div>
        <label>Gender</label>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="Male" {{ $mhs->gender == 'Male' ? 'checked':''}} 
            class="form-check-input" >
            <label>Male</label>
        </div>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="Female" {{ $mhs->gender == 'Female' ? 'checked':''}} 
            class="form-check-input" >
            <label>Female</label>
        </div>
        <div class="form-group-25">
            <label>Jurusan</label>
            <select name="jrsn" class="form-control">
                <option value="0"> Pilihlah Jurusan Anda </option>
                <option value="Teknologi Informasi" {{ $mhs->jurusan == 'Teknologi Informasi' ? 'selected':'' }}>Teknologi Informasi</option>
                <option value="Akuntansi" {{ $mhs->jurusan == 'Akuntansi' ? 'selected':'' }}>Akuntansi </option>
                <option value="Biologi" {{ $mhs->jurusan == 'Biologi' ? 'selected':'' }}>Biologi </option>
                <option value="Kedokteran"  {{ $mhs->jurusan == 'Kedokteran' ? 'selected':'' }}>Kedokteran </option>
                <option value="Keperawatan"  {{ $mhs->jurusan == 'Keperawatan' ? 'selected':'' }}>Keperawatan </option>
                <option value="Teknik"  {{ $mhs->jurusan == 'Teknik' ? 'selected':'' }}>Teknik </option>
            </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Olahraga" {{ in_array('Olahraga' , $bmnt) ? 'checked':'' }} class="form-check-input">
            <label>Olahraga</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Kesenian" {{ in_array('Kesenian' , $bmnt) ? 'checked':'' }} class="form-check-input">
            <label>Kesenian</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bmnt[]" value="Kesehatan" {{ in_array('Kesehatan' , $bmnt) ? 'checked':'' }} class="form-check-input">
            <label>Kesehatan</label>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="simpan" class="btn btn-outline-primary">
        </div>
</form>
</div>
@stop