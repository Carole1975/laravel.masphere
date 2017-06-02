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
    		'debut' => '2017-05-28 20:00:00',
            'duree'=>4,
            'nbrEnfant'=>3,
            'gardeChezFamille'=>0
            ]);
        DB::table('annonces')->insert([
            'debut' => '2017-05-31 06:00:00',
            'duree'=>6,
            'nbrEnfant'=>1,
            'gardeChezFamille'=>1
            ]);
        DB::table('annonces')->insert([
            'debut' => '2017-06-04 18:00:00',
            'duree'=>4,
            'nbrEnfant'=>3,
            'gardeChezFamille'=>0
            ]);
        DB::table('annonces')->insert([
            'debut' => '2017-06-15 23:00:00',
            'duree'=>4,
            'nbrEnfant'=>3,
            'gardeChezFamille'=>1
            ]);
        
        
    }
}
