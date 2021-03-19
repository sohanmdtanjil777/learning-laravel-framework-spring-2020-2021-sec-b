<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physical_store_sales;

//use App\Social_media_sales;
//use App\insert_product;
use Excel;


class excelFileController extends Controller
{
    public function take_sales_data(){

        return view('system_sales.excel_file_data_form');
        
    }

    public function sales_data_to_db(Request $request){

       

          $path = $request->file('excel_file')->getRealPath();

          $data = Excel::load($path)->get();

          

        

        
    }
}
