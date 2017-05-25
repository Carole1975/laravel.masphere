<?php

use Illuminate\Database\Seeder;

class AnnoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('annonces')->insert([
    		'text' => 'Premiere annonce',
    		]);
    	DB::table('annonces')->insert([
    		'text' => 'Deuxième annonce'
    		]);
    	DB::table('annonces')->insert([
    		'text' => 'Troisième annonce'
    		]);
    	DB::table('annonces')->insert([
    		'text' => 'Quatrième annonce'
    		]);
    }
}
