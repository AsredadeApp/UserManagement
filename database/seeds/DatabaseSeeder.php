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

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //,
                'username' => $faker->userName,
                'name' => $faker->name,
                'password' => $faker->md5,
                'mobile' => $faker->phoneNumber,
                'status' => 1,
                'gid' => $i ,
                'email'=>$faker->email,
                'postalCode'=>$faker->postcode,
                'tellNumber'=>$faker->phoneNumber,
                'img'=>$faker->word,
                'address'=>$faker->word

            ]);
        }
    }
}
