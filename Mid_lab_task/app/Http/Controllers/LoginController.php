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


            if($user[0]['type']=='snmp'){

                $req->session()->put('useremail', $req->email);

                return redirect('/dashboards/sales_and_marketing_person');
            }elseif ($user[0]['type']=='accountent') {

                return redirect('/dashboards/accountent');
            }elseif ($user[0]['type']=='customer') {
                
                return redirect('/dashboards/customer');
            }elseif($user[0]['type']=='admin'){
                 
                return redirect('/dashboards/admin'); 

            }
            
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
          
        }
    }
}
