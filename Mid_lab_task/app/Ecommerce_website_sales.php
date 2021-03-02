<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce_website_sales extends Model
{
    protected $table = 'ecommerce_website_sales';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
