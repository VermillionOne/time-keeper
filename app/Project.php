<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'project_title'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function assignment()
    {
        return $this->hasMany('App\Assignment');
    }
}
