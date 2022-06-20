@extends('layouts/main')
@section('content')  
                    <div class="card-header">
                        <a  name="" id="" class="btn btn-primary" href="/user/formuser" role="button"><i class="bi bi-plus-square"></i> Tambah Data</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                            <input class="form-control mr-sm-2" name="c" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                        </form>
                    </div>
                    @if (session('alertTambah'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('alertTambah') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('alertUpdate'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('alertUpdate') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('alertHapus'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('alertHapus') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-body">
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NIK USER</th>
                                    <th scope="col">NAMA USER</th>
                                    <th scope="col">NO HANDPHONE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $no =>$u)
                                <tr>
                                    <th scope="row"> {{ $user->firstItem() + $no}}</th>
                                    <td>{{$u->nik_user}}</td>
                                    <td>{{$u->nama_user}}</td>
                                    <td>{{$u->no_hp}}</td>
                                    <td>
                                        <a href="user/edituser/{{ $u->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="user/delete/{{$u->id}}" class="btn btn-outline-danger" 
                                        onclick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="bi bi-x-square"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
</div>
<span class="float-right">{{ $user->links() }}</span>
</div>
@stop