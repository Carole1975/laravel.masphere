<?php

use Illuminate\Database\Seeder;

class AnnoncesRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('annonces_role')->insert([
    		'user_id' => 2,
    		'annonce_id' => 1
    		]);
    	DB::table('annonces_role')->insert([
    		'user_id' => 3,
    		'annonce_id' => 3
    		]);			
    	DB::table('annonces_role')->insert([
    		'user_id' => 2,
    		'annonce_id' => 4
    		]);
    	DB::table('annonces_role')->insert([
    		'user_id' => 2,
    		'annonce_id' => 2
    		]);

    }
}
