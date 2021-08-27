<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTeamProjectTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_team_project_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('project_id');
            $table->integer('task_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_teams_table');
    }
}
