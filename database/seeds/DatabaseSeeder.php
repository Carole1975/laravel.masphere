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
    	$this->call(UsersTableSeeder::class);
    	$this->call(RolesTableSeeder::class);
    	$this->call(RolesUsersTableSeeder::class);
    	$this->call(AnnoncesTableSeeder::class);
    	$this->call(AnnoncesRolesTableSeeder::class);
    	$this->call(ChildsTableSeeder::class);
    	$this->call(ChildsRoleTableSeeder::class);
    	$this->call(disposTableSeeder::class);
        $this->call(DisposRoleTableSeeder::class);
    }
}
