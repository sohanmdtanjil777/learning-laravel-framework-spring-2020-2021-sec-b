<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\allUser;
use Validator;
use App\Http\Requests\userRequest;


class homeController extends Controller
{
    public function index(){

        return view('home.register');
        //return redirecct('/home/register');
    }

    public function store_M3F2(userRequest $req){


            $user = new allUser();
            $user->full_name     = $req->fname;
            $user->username     = $req->username;
            $user->email         = $req->email;
            $user->password         = $req->password;
            $user->address         = $req->address;
            $user->company         = $req->company;
            $user->phone         = $req->phone;
            $user->city         = $req->city;
            $user->country         = $req->country;
            $user->type         = $req->type;
            
            $user->save();
            return redirect('/login');

            


    }

    
}
