<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo'
    ];

    protected $upload = '/images/';

    public function getphotoattribute($photo)
    {
        return $this->upload . $photo;
    }
}
