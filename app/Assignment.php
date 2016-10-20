<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'assignment_title'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class)
    }

    public function times()
    {
        return $this->hasMany(Time::class);
    }
}
