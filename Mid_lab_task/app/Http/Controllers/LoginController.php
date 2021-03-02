<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\allUser;

use App\Http\Requests\loginRequestM1F2;


class LoginController extends Controller
{
    public function index(){

        return view('front_page');
    }

    public function view_login_page(){

        return view('login.index');
    }

    public function verify_M1F2(loginRequestM1F2 $req){

         $user = allUser::where('email', $req->email)
                    ->where('password', $req->password)
                    ->get(); 
       

        if(count($user) > 0 ){

            $req->session()->put('username', $req->username);
            return redirect('/home');
            
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
          
        }
    }
}
