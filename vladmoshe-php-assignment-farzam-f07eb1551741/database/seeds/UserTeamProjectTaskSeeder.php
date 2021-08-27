<?php

use Illuminate\Database\Seeder;
use App\UserTeamProjectTask;
class UserTeamProjectTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        $limit=2;
        for($i=0;$i<$limit;$i++)
        {
            UserTeamProjectTask::create([
                'team_id'=>$faker->numberBetween($min=1,$max=5),
                'user_id'=>$faker->numberBetween($min=1,$max=5),
                'project_id'=>$faker->numberBetween($min=1,$max=5),
                'task_id'=>$faker->numberBetween($min=1,$max=5),
            ]);
        }
    }
}
