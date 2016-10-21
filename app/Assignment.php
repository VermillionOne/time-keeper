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
        'project_id',
        'assignment_title'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function time()
    {
        return $this->hasMany('App\Time');
    }
}
