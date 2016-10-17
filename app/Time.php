<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time',
        'end_time',
        'elapsed_time'
    ];

    public function project()
    {
        return $this->belongsToMany("App\Time");
    }
}
