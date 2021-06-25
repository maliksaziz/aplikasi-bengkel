<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //menampilkan halaman login
    public function login(){
    	return view('layouts.newlogin');
    }

    //menampilkan halaman register
    public function register(){
    	return view('layouts.newregister');
    }

    //menampilkan halaman dashboard
    public function dashboard(){
    	return view('dashboard');
    }

    //proses logout
    public function logout(){
    	Auth::logout();
    	//redirect halaman
    	return redirect('/newlogin');
    }

    //menampilkan halaman postlogin
    public function postlogin(Request $request){
    	//kondisi login
    	if (Auth::attempt($request->only('email', 'password'))){
    		//jika login sukses
    		return redirect('/dashboard');
    	}
    	else{
    		//jika gagal login
    		return redirect('/newlogin');
    	}
    }

    //menampilkan halaman reject
    public function reject(){
    	return view('layouts.reject');
    }

    //menampilkan halaman rejetrole
    public function rejectrole(){
    	return view('layouts.rejectrole');
    }
}
