<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('user')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'class' => Str::random(10),
            'section' => Str::random(10),
            'phone_number' => Str::random(10),
            'phone_number' => Str::random(10),
            'cnic' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
