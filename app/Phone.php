<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the list of incommings via this phone
     */
    public function incomings()
    {
        return $this->hasMany(Incoming::class);
    }
}
