<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model{
   public $fillable = ['name', 'price', 'body', 'picture', 'small_body', 'user_id'];
   
   public function catalogs(){
	   return $this->belongsTo('App\Category', 'categoru_id');
   }
   
}
