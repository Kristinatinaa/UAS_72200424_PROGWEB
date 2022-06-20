<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mhs;

class MhsAPIController extends Controller
{
    public function all(){
        $mhs = Mhs::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mhs
        ], 200);
    }
    public function create(Request $request){
        $mhs = Mhs::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_mnt' => $request->bidang_mnt,
        ]);
        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }
    }
    public function update($id, Request $request){
        $mhs = Mhs::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_mnt' => $request->bidang_mnt
        ]);
        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah',
            ], 400);
        }
    }
    public function delete($id){
        $mhs = Mhs::find($id);
        $mhs -> delete();

        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil dihapus',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal dihapus',
            ], 400);
        }
    }
}
