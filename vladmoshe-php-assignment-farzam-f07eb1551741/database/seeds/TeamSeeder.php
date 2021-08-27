<?php

use Illuminate\Database\Seeder;
use App\Teams;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'PHP',
            'Node',
            'BootStrap',
            'Angular',
            'IOS'

        ];
        $slug = [
            'PHP_Back-End',
            'Node_Back-End',
            'BootStrap_Front-End',
            'Angular_Front-End',
            'IOS_Front-End'


        ];

        $teamsFunctionality = [
            'PHP Back-End',
            'Node Back-End',
            'BootStrap Front-End',
            'Angular Front-End',
            'IOS Front-End'

        ];


        $limit = 5;
        for ($i = 0; $i < $limit; $i++) {

              Teams::create([
                'name' => $names[$i],
                'slug' => $slug[$i],
                'functionality' => $teamsFunctionality[$i],

            ]);

        }
    }
}
