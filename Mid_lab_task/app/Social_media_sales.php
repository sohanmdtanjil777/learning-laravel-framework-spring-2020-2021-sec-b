<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_media_sales extends Model
{
    protected $table = 'social_media_sales';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
