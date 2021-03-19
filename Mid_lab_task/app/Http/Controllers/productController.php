<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\insert_product;

use App\Http\Requests\store_product;

class productController extends Controller
{

    public function view_insert_product(){

        
        return view('show_product.insert_product');
    }


    public function insert_product(store_product $req){


            $product_data = new insert_product();

            $product_data->product_name     = $req->p_name;
            $product_data->category     = $req->category;
            $product_data->unit_price         = $req->unit_price;
            $product_data->p_status         = $req->product_status;
            
            $product_data->save();


            echo "<h2>Product Inserted To Database Successfully</h2>";
    

            //return redirect('/show_product/existing_product');
    }


    public function existing_product(){
          
       $existing_product = insert_product::where('p_status', '=', 'existing')
                                           ->get(); 


        return view('show_product.existing_product')->with('existing', $existing_product);

    }


      public function existing_product_details($id){
          
       $existing_product_details = insert_product::find($id); 


        return view('show_product.product_details')->with('product_details', $existing_product_details);

    }

     public function product_edit_view($id){
          
       $product_edit_page = insert_product::find($id); 


        return view('show_product.product_edit')->with('product_details', $product_edit_page);

    }

    public function product_save_change($id,Request $req){


    	          


            $product_data_edit = insert_product::find($id);

            $product_data_edit->product_name     = $req->p_name;
            $product_data_edit->category         = $req->category;
            $product_data_edit->unit_price         = $req->unit_price;
            $product_data_edit->p_status          = $req->product_status;
            
            $product_data_edit->save();


           return redirect('/product/existing_product');

    }


    public function product_delete_view($id){

        $delete_product = insert_product::find($id);
        return view('show_product.product_delete_view')->with('delete_product', $delete_product);
    }


    public function product_delete_final($id){


    	    if(insert_product::destroy($id)){
              
              return redirect('/product/existing_product');

    	    }  

    }

     //upcomming Product

    public function upcomming_product(){
          
       $upcomming_product = insert_product::where('p_status', '=', 'upcomming')
                                           ->get(); 


       //print $upcomming_product;


        return view('show_product.upcomming_product')->with('upcomming', $upcomming_product);

    }


      public function upcomming_product_details($id){
          
       $upcomming_product_details = insert_product::find($id); 


        return view('show_product.product_details')->with('product_details', $upcomming_product_details);

    }

    public function upcomming_product_edit_view($id){
          
       $up_product_edit_page = insert_product::find($id); 


        return view('show_product.product_edit')->with('product_details', $up_product_edit_page);

    }


    public function upcomming_product_save_change($id,Request $req){


    	          


            $product_data_edit = insert_product::find($id);

            $product_data_edit->product_name     = $req->p_name;
            $product_data_edit->category         = $req->category;
            $product_data_edit->unit_price         = $req->unit_price;
            $product_data_edit->p_status          = $req->product_status;
            
            $product_data_edit->save();


           return redirect('/product/upcomming_product');

    }


    public function upcomming_product_delete_view($id){

        $delete_product = insert_product::find($id);
        return view('show_product.product_delete_view')->with('delete_product', $delete_product);
    }


    public function upcomming_product_delete_final($id){


    	    if(insert_product::destroy($id)){
              
              return redirect('/product/upcomming_product');

    	    }  

    }










}
