<?php

use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
    	$faker = Faker\Factory::create();
    	$limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //,
                'firstname' => $faker->firstname,
                'lastname'	=>	$faker->lastname,
                'email' => $faker->unique()->email,
                'phone' => $faker->phoneNumber,
                'group_id'	=>2,

            ]);
        }
    }
}
