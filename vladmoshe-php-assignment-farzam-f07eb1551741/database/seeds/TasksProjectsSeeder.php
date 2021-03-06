<?php

use App\TasksProjects;
use Illuminate\Database\Seeder;

class TasksProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        $limit=5;
        for($i=0;$i<$limit;$i++)
        {
            TasksProjects::create([
                'project_id'=>$faker->numberBetween($min=1,$max=5),
                'task_id'=>$faker->numberBetween($min=1,$max=5),

            ]);
        }
    }
}
