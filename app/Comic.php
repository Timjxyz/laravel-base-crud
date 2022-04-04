<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable=['title','description','series','type','sale_date','thumb','price'];
}
