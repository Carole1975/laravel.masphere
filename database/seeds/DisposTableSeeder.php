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
            'debut_dispo' => ' 2017-07-18 17:00:00',
            'duree_dispo'=> 4
            ]);
        DB::table('dispos')->insert([
            'debut_dispo' => ' 2017-06-04 13:00:00',
            'duree_dispo'=> 1
            ]);
        DB::table('dispos')->insert([
            'debut_dispo' => ' 2017-05-26 08:20:00',
            'duree_dispo'=> 8
            ]);
        DB::table('dispos')->insert([
            'debut_dispo' => ' 2017-05-30:08:00',
            'duree_dispo'=> 3
            ]);
    }
}
