<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    
    function pageUrl(){
        return $this->belongsTo('App\PageUrl','id_url');
    }

    function category(){
        return $this->belongsTo('App\Categories','id_type','id');
    }
}
