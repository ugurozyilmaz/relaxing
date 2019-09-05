<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $dateFormat = 'U';

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
