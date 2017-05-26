<?php

use Illuminate\Database\Seeder;

class ChildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('childs')->insert([
    		'name' => 'Camille',
    		'age'=>6
    		]);
    	DB::table('childs')->insert([
    		'name' => 'Lou',
    		'age'=>7
    		]);
    	DB::table('childs')->insert([
    		'name' => 'Lucas',
    		'age'=>3
    		]);
    	DB::table('childs')->insert([
    		'name' => 'Jean',
    		'age'=>9

    		]);
    }
}
