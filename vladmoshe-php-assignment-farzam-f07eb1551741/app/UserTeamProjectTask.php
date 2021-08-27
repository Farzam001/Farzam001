<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTeamProjectTask extends Model
{

    protected $fillable = [
        'team_id', 'user_id', 'project_id','task_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
