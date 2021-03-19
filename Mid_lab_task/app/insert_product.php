<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_product extends Model
{
    
    protected $table = 'product_table';
    public $timestamps = true;
    protected $primaryKey = 'id';

}
