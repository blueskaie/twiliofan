<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    /**
     * Get the phone that has the incoming.
     */
    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    protected $fillable = ['message'];
}
