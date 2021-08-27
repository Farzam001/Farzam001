<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TasksProjects extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id','task_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
    ];
}
