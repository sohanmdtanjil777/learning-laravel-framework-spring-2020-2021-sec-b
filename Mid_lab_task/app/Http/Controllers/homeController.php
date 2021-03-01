<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;


class homeController extends Controller
{
    public function index(){

        return view('home.register');
        //return redirecct('/home/register');
    }

    
}
