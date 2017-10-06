<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$now = date('Y-m-d H:i:s');
     	$faker = Faker\Factory::create();
     	$limit = 33;
     	for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([ //,
                'name' => ucfirst($faker->word),
                'description'	=>	$faker->paragraph,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
