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
            'name' => 'famille'
            ]);
        DB::table('roles')->insert([
            'name' => 'pro'
            ]);
        DB::table('roles')->insert([
            'name' => 'admin'
            ]);
    }
}

//id implicite en 1 b2 3 parce que table id en incrément elle rmpli toute seule
