<?php

use Illuminate\Database\Seeder;

class DisposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('dispos')->insert([
    		'debut_dispo' => ' 2017-07-18',
            'debut_heure' => '17:00:00',
            'duree'=> 4,
            'commentaire'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quis!',
            'capacitegarde_max'=> 4,
    		]);
    	DB::table('dispos')->insert([
    		'debut_dispo' => ' 2017-07-1',
            'debut_heure' => '17:00:00',
            'duree'=> 4,
            'commentaire'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, minima, obcaecati. Non?',
            'capacitegarde_max'=> 4,
    		]);
    	DB::table('dispos')->insert([
    		'debut_dispo' => ' 2017-07-20',
            'debut_heure' => '37:18:00',
            'duree'=> 4,
            'commentaire'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quis!',
            'capacitegarde_max'=> 4,
    		]);
    	DB::table('dispos')->insert([
    		'debut_dispo' => ' 2017-07-21',
            'debut_heure' => '15:02:00',
            'duree'=> 4,
            'commentaire'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quis!',
            'capacitegarde_max'=> 4,
    		]);
    }
}
