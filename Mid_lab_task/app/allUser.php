<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allUser extends Model
{
    protected $table = 'all_user_table';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
