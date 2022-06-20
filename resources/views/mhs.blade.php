@extends('layouts/main')
@section('content')  
                    <div class="card-header">
                        <a  name="" id="" class="btn btn-primary" href="/mhs/form" role="button"><i class="bi bi-plus-square"></i> Tambah Data</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mhs/cari">
                            <input class="form-control mr-sm-2" name="c" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                        </form>
                    </div>
                        @if (session('alert_tambah'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('alert_tambah') }}</strong>
                            <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @elseif (session('alert_update'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('alert_update') }}</strong>
                            <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @elseif (session('alert_hapus'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('alert_hapus') }}</strong>
                            <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="card-body">
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">GENDER</th>
                                    <th scope="col">JURUSAN</th>
                                    <th scope="col">BIDANG MINAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mhs as $no =>$m)
                                <tr>
                                    <th scope="row"> {{ $mhs->firstItem() + $no}}</th>
                                    <td>{{$m->nim}}</td>
                                    <td>{{$m->nama}}</td>
                                    <td>{{$m->gender}}</td>
                                    <td>{{$m->jurusan}}</td>
                                    <td>{{$m->bidang_mnt}}</td>
                                    <td>
                                        <a href="mhs/editform/{{ $m->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="mhs/deletemhs/{{$m->id}}" class="btn btn-outline-danger" 
                                        onclick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="bi bi-x-square"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            showing 
                            {{ $mhs->firstItem() }}
                            to 
                            {{ $mhs->lastItem() }}
                            of 
                            {{ $mhs-> total() }}
                            entries
</div>
                        <span class="float-right">{{ $mhs->links() }}</span>
</div>
@stop