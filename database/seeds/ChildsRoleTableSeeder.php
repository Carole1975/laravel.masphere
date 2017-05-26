<?php

use Illuminate\Database\Seeder;

class ChildsRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('childs_role')->insert([
    		'users_id' => 2,
    		'childs_id' => 1
    	]);
    	DB::table('childs_role')->insert([
    		'users_id' => 2,
    		'childs_id' => 2
    	]);
    	DB::table('childs_role')->insert([
    		'users_id' => 2,
    		'childs_id' => 3
    	]);
    	DB::table('childs_role')->insert([
    		'users_id' => 3,
    		'childs_id' => 4
    	]);
    }
}
