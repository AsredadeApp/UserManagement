<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('groups')->insert([
                'subGid' => $i,
                'name' => $faker->name,
                'perCode' => $faker->md5
            ]) ;
        }
    }
}
