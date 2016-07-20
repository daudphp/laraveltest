<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'john',
            'email' => 'john@gmail.com',
            'password' => 'doe',
        ]);
    }
}
