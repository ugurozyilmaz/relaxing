<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dateFormat = 'U';

    public function songs() {
        return $this->hasMany('App\Song');
    }
}
