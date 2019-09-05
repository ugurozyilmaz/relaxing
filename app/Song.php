<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $dateFormat = 'U';
    protected $hidden = [
        'created_at', 'updated_at','user_id', 'category_id'
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
