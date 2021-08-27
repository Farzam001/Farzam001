<?php

use Illuminate\Database\Seeder;
use App\Projects;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'PHP_Project',
            'Node_Project',
            'BootStrap_Project',
            'Angular_Project',
            'IOS_Project'

        ];
        $limit=5;
        for($i=0;$i<$limit;$i++)
        {
            Projects::create([
                'name' => $names[$i]
                ]);

        }
    }
}
