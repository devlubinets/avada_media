<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    public  $timestamps = false;
    protected $fillable = array("name_buyer"); // поля которые будут доступны через ORM
}
