<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesController extends Controller
{
    public function physical_store_sales_list(){

        $physical_store_sales_list = Physical_store_sales::all();
        
        return view('system_sales.physical_store_sales_list')->with('p_s_list', $physical_store_sales_list);
    }
}
