<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
      'file_path'
    ];

    protected $uploads = '/images/';

    public function getFilePathAttribute($photo){
        return $this->uploads . $photo;
    }
}

