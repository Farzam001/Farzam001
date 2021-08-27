<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projects extends Model{
    use SoftDeletes;
    protected $fillable = [
    'name', 'status','created_at','updated_at'
];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token'
];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    'email_verified_at' => 'datetime',
];
    public function tasks()
    {
        return $this->belongsToMany(Tasks::class, 'tasks_projects');
    }
}

