<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Physical_store_sales;

class salesController extends Controller
{
    public function physical_store_sales_insert(){

        
        return view('system_sales.physical_store_sales_data_insert');
    }

    public function physical_store_sales_data_entry(Request $req){

                
            $sales_data = new Physical_store_sales();

            $sales_data->customer_name     = $req->cname;
            $sales_data->customer_address     = $req->c_address;
            $sales_data->phone_no         = $req->phone;
            $sales_data->product_id         = $req->p_id;
            $sales_data->product_name         = $req->p_name;
            $sales_data->unit_price         = $req->unit_price;
            $sales_data->quantity         = $req->quantity;
            $sales_data->total_price         = $req->total_price;
            $sales_data->payment_type         = $req->payment_type;
            $sales_data->product_status         = 'sold';
            
            $sales_data->save();
            //return redirect('/login');

            echo "done done";


    }

    public function current_and_last_seven(){
      $current_day = Physical_store_sales::whereDate('created_at', date('Y-m-d'))->get();

      $last_seven = self::last_seven_days_sales();

      //print_r($current_day);
      //print_r($last_seven);

      return view('system_sales.show_sold_products')->with('current', $current_day)->with('seven' , $last_seven);

    }

    public function last_seven_days_sales(){

      $last_seven_days_sales = Physical_store_sales::whereDate('created_at', now()->subDays(1))->get();

      return $last_seven_days_sales;
    }


    public function physical_store_sales_list(){

        $physical_store_sales_list = Physical_store_sales::all();
        
        return view('system_sales.physical_store_sales_list')->with('p_s_list', $physical_store_sales_list);
    }

    public function physical_store_sales_list(){

        $social_media_sales_list = Social_media_sales::all();
        
        return view('system_sales.social_media_sales_list')->with('s_m_s_list', $social_media_sales_list);
    }

    public function view_insert_product(){

        
        return view('show_product.insert_product');
    }


}
