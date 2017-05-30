<?php

use Illuminate\Database\Seeder;

class AnnonceUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('annonce_user')->insert([
    		'user_id' => 2,
    		'annonce_id' => 1
    		]);
    	DB::table('annonce_user')->insert([
    		'user_id' => 2,
    		'annonce_id' => 2
    		]);
    	DB::table('annonce_user')->insert([
    		'user_id' => 2,
    		'annonce_id' => 3
    		]);
    	DB::table('annonce_user')->insert([
    		'user_id' => 2,
    		'annonce_id' => 4
    		]);
    }
}
