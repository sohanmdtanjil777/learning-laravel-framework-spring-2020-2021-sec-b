<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function viewSnmp(){

        return view('dashboards.sales_and_marketing_person');
      
    }

     public function viewAccountent(){

        return view('dashboards.accountent');
      
    }
     public function viewCustomer(){

        return view('dashboards.customer');
      
    }
     public function viewAdmin(){

        return view('dashboards.admin');
      
    }
}
