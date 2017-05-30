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
            'email' => 'admin@masphere.com',
            'password' => bcrypt('admin'),
            'profile' => (1),

            ]);
        DB::table('users')->insert([
            'name' => 'famille1',
            'email' => 'famille1@gmail.com',
            'password' => bcrypt('famille'),
            'profile' => (2),
            ]);
        DB::table('users')->insert([
            'name' => 'famille2',
            'email' => 'famille2@gmail.com',
            'password' => bcrypt('famille'),
            'profile' => (1),
            ]);
        DB::table('users')->insert([
            'name' => 'pro1',
            'email' => 'pro1@gmail.com',
            'password' => bcrypt('pro'),
            'profile' => (1),
            ]);
        DB::table('users')->insert([
            'name' => 'pro2',
            'email' => 'pro2@gmail.com',
            'password' => bcrypt('pro'),
            'profile' => (1),
            ]);
    }
}
