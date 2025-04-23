<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SignalHistory extends Model
{
    //

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function signal() {
        return $this->hasMany(Signal::class);
    }
}
