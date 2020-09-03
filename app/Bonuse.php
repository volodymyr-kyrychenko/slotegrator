<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonuse extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'min_amount', 'max_amount',
    ];
}
