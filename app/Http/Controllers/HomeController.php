<?php

namespace App\Http\Controllers;

use App\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\Session;

class HomeController extends Controller
    {
    public function index()
        {
            if(!Session::get('login')){
                return redirect('/login');
            }else{
            $item = DB::table('item')->get();
           return view('admin.index',['item' => $item]);
        }
    }
    public function login(){
        return view('admin.login');
    }
    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = HomeModel::where('username',$username)->first();
        $item = DB::table('item')->get();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/admin');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('/login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('admin.register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'namaUser' => 'required|min:4',
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:user',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        DB::table('user')->insert([
	    	'namaUser' => $request->namaUser,
	    	'username' => $request->username,
	    	'password' =>bcrypt($request->password),
            'email' => $request->email
	    ]);
        return redirect('/login')->with('alert-success','Kamu berhasil Register');
    }
    


    public function tambah()
    {
	    return view('admin.tambah'); 
    }

    public function store(Request $request)
    {
        DB::table('item')->insert([
	    	'namaItem' => $request->namaItem,
	    	'deskripsi' => $request->deskripsi,
	    	'asal' => $request->asal,
            'profil' => $request->profil,
            'notes' => $request->notes,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'idKategori' => $request->idKategori,
            'status' => $request->status,
	    ]);
	    return redirect('/admin');
    }
    public function edit($idItem)
    {
	    $item = DB::table('item')->where('idItem',$idItem)->get();
	    return view('admin.edit',['item' => $item]);
    }
    public function update(Request $request)
    {
        DB::table('item')->where('idItem',$request->idItem)->update([
		'namaItem' => $request->namaItem,
		'deskripsi' => $request->deskripsi,
		'asal' => $request->asal,
        'profil' => $request->profil,
        'notes' => $request->notes,
		'berat' => $request->berat,
		'harga' => $request->harga,
        'idKategori' => $request->idKategori,
        'status' => $request->status
	]);
	return redirect('/admin');
    }
    public function hapus($idItem)
    {
	    DB::table('item')->where('idItem',$idItem)->delete();	
	    return redirect('/admin');
    }
}
