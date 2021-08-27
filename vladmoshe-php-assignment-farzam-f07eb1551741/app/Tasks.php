<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasks extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'task_description', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at'
    ];

    public function projects()
    {
        return $this->belongsToMany(Projects::class, 'tasks_projects');
    }
}

