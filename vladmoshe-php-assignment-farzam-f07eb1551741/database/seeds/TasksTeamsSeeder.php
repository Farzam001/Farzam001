<?php

use App\TasksTeams;
use Illuminate\Database\Seeder;

class TasksTeamsSeeder extends Seeder
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
          TasksTeams::create([
                'task_id'=>$faker->numberBetween($min=1,$max=5),
                'team_id'=>$faker->numberBetween($min=1,$max=5),

            ]);
        }
    }
}
