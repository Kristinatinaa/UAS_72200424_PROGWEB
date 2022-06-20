<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user= User::paginate();
        return view ('user',['user'=>$user]) ;
    }
    public function formuser(){
        return view('formuser');
    }
    public function simpanuser(Request $request){
       $user = User::create([
            'nik_user'=>$request->nik_user,
            'nama_user'=>$request->nama_user,
            'no_hp'=>$request->hp,
            'password'=>bcrypt ($request->password)
        ]);
        return redirect("/user")->with('alertTambah','Data berhasil ditambahkan');
    }
    public function edituser($id){
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }
    public function updateuser($id, Request $request){
        $user = User::find($id);
        $user->nik_user = $request->nik_user;
        $user->nama_user = $request->nama_user;
        $user->no_hp = $request->no_hp;
        $user->save();
        return redirect("/user")->with('alertUpdate', 'Data Terubah');
    }
    public function login(){
        return view('login');
    }
    public function cekLogin(Request $request){
        if (!Auth::attempt(['nik_user'=> $request -> nik_user, 'password'=> $request -> password]))
        {
            return redirect('/mhs');
        }
        else
        {
            return redirect('/login');
    }
}
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function delete($id){
        $user = User::find($id);
        $user -> delete();
        return redirect('/user')->with ('alertHapus','Data Berhasil Dihapus');
    }
}
