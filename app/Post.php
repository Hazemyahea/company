<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body','photo_id'
    ];


    // Relations

    public function photo (){

        return $this->belongsTo('App\Photo','photo_id');
    }
}
