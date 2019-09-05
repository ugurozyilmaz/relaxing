<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $dateFormat = 'U';
    protected $casts = [
        'is_favorite' => 'boolean',
    ];

    protected $fillable = [
        'song_id', 'user_id'
    ];

    protected $hidden = [
        'id', 'user_id','created_at', 'updated_at'
    ];

    public function song() {
        return $this->belongsTo('App\Song');
    }
}
