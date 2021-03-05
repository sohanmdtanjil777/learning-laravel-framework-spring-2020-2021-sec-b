<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_sales extends Model
{
    protected $table = 'product_store_channel';
    public $timestamps = true;
    protected $primaryKey = 'id';
}
