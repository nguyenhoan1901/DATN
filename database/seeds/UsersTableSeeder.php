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
            'username' => 'admin',
            'is_admin' => 1,
            'email' =>'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
