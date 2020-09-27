<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * Get the user that owns the flight.
     */
    public function user()
    {
        return $this->belongsTo('App\Flight');
    }
}
