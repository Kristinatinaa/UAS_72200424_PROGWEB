<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mhs;

class MhsController extends Controller
{
    public function mhs(){
        $mhs = Mhs::paginate(10);
        return view('mhs',['cek'=>'mhs','mhs'=>$mhs]);
    }
    public function cari(Request $request){
        $c=$request->c;
        $mhs=mhs::where('nama','like','%'.$c.'%')
        ->orwhere('nim','like','%'.$c.'%')
        ->paginate();
        return view('mhs',['mhs'=>$mhs]);
    }
    public function form(){
        return view('form');
    }
    public function simpan(Request $request){
        $bmnt = implode(",",$request->get('bmnt'));
        Mhs::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'jurusan'=>$request->jrsn,
            'bidang_mnt'=>$bmnt
        ]);
        return redirect("/mhs")->with ('alert_tambah','Data Berhasil Ditambahkan');
    }
    public function editform($id){
        $mhs = Mhs::find($id);
        return view('editform',['mhs'=>$mhs]);
    }
    public function update($id, Request $request){
        $bmnt = implode(',',$request->bmnt);
        $mhs = Mhs::find($id);
        $mhs -> nim = $request ->nim;
        $mhs -> nama = $request ->nama;
        $mhs -> gender = $request ->gender;
        $mhs -> jurusan = $request ->jrsn;
        $mhs -> bidang_mnt= $bmnt;
        $mhs -> save();
        return redirect('/mhs')->with ('alert_update','Data Berhasil Diedit');
    }
    public function deletemhs($id){
        $mhs = Mhs::find($id);
        $mhs -> delete();
        return redirect('/mhs')->with ('alert_hapus','Data Berhasil Dihapus');
    }
}
