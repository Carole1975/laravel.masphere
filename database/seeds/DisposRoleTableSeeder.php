<?php

use Illuminate\Database\Seeder;

class DisposRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispos_role')->insert([
    		'user_id' => 3,
    		'dispo_id' => 1
    	]);
    	DB::table('dispos_role')->insert([
    		'user_id' => 3,
    		'dispo_id' => 2
    	]);
    	DB::table('dispos_role')->insert([
    		'user_id' => 4,
    		'dispo_id' => 3
    	]);
    	DB::table('dispos_role')->insert([
    		'user_id' => 4,
    		'dispo_id' => 4
    	]);
    }
}
