<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AnnoncesTableSeeder::class);
        $this->call(AnnonceUserTableSeeder::class);
        // $this->call(DispoTableSeeder::class);
        // $this->call(DisposUserTableSeeder::class);
    }
}
