<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User 1 - admin
        DB::table('users')->insert([
            'name' => 'Ali',
            'username' => 'ali',
            'email' => 'ali@gmail.com',
            'mykad' => '808080808888',
            'role' => 'admin',
            'password' => bcrypt('abc123'),
            'status' => 'active'
        ]);
        // User 2 - user
        DB::table('users')->insert([
            'name' => 'Abu',
            'username' => 'abu',
            'email' => 'abu@gmail.com',
            'mykad' => '909090909999',
            'password' => bcrypt('abc123')
        ]);
    }
}
