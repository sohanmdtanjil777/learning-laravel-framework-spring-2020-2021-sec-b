<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_sales extends Model
{
    protected $table = 'physical_store_sales';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
