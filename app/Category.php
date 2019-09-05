<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dateFormat = 'U';
    protected $hidden = ['created_at', 'updated_at'];

    public function songs() {
        return $this->hasMany('App\Song');
    }
}
