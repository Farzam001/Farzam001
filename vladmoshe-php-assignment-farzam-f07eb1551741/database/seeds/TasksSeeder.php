<?php

use Illuminate\Database\Seeder;
use App\Tasks;
class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'PHP_task',
            'Node_task',
            'BootStrap_task',
            'Angular_task',
            'IOS_task'

        ];

        $description= [
            'Develop PHP Back-End',
            'Develop Node Back-End',
            'Develop BootStrap Front-End',
            'Develop Angular Front-End',
            'Develop IOS Front-End'

        ];


        $limit = 5;
        for ($i = 0; $i < $limit; $i++) {

           Tasks::create([
                'name' => $names[$i],
                'task_description' => $description[$i],

            ]);

        }
    }
}
