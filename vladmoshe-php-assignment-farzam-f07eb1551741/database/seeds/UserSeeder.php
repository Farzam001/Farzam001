<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;
        $faker = Faker\Factory::create();
        for ($i = 0; $i < $limit; $i++) {

            $user = User::create([
                'name' => $faker->name,
                'phone' => $faker->numerify('###-###-#####'),
                'email' => $faker->unique()->email,
                'password' => $faker->sha1,
                'address' => $faker->paragraph($nbSentences = 0.5, $variableNbSentences = true),

            ]);



            $roleCount=Role::count();

            $random = rand(1,$roleCount);

            $role = Role::findById($random);

            $user->assignRole([$role->name]);



        }
    }

}
