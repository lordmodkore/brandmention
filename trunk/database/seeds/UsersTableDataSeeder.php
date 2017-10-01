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
        $now = date('Y-m-d H:i:s');
    	DB::table('users')->truncate();
    	$faker = Faker\Factory::create();
    	$limit = 33;
        DB::table('users')->insert([
            'firstname' => 'Elland',
            'lastname'  =>  'Pansensoy',
            'group_id'  =>  1,
            'verified' =>1,
            'email' => 'elland.pansensoy@gmail.com',
            'password' => bcrypt('101481qwe'),
        ]);
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //,
                'firstname' => $faker->firstname,
                'lastname'	=>	$faker->lastname,
                'email' => $faker->unique()->email,
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('pass123'),
                'group_id'	=>2,
                'verified' =>1,
                'created_at' => $now,
                'updated_at' => $now,

            ]);
        }


    }
}
