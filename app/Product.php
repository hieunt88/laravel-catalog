<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    	'title', 
    	'sku', 
    	'description',
    	'price',
    	'stock'
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function getInStockAttribute(){
    	return $this->stock > 0;
    }
}
