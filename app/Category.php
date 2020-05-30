<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ar','name_en'
    ];

    //Relations ..

    public function products () {

        return $this->hasOne('App\Product','category_id');
    }
}
