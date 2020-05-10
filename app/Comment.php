<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function good() {
        return $this->belongsTo('App\Good');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
