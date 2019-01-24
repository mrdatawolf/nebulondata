<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thrusters extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'thrusters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'type', 'newtons_generated', 'watts_used', 'grid_size'];
}
