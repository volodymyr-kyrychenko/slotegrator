<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonuseReservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status', 'amount',
    ];
}
