<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title_ar', 'title_en','price','photo_id','category_id'
    ];




    // Relations ..

    public function category (){
        return $this->belongsTo('App\Category','category_id');
    }

    public  function photo () {
        return $this->belongsTo('App\Photo','photo_id');
    }
}
