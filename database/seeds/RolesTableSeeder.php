<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'famille',
            'role_id' => '1'
            ]);
        DB::table('roles')->insert([
            'name' => 'pro',
            'role_id' => '2'
            ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'role_id' => '3'
            ]);
    }
}

//id implicite en 1 b2 3 parce que table id en incrément elle rmpli toute seule
