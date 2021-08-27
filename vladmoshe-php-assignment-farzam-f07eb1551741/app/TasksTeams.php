<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TasksTeams extends Model
{
    protected $fillable = [
         'task_id', 'team_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
