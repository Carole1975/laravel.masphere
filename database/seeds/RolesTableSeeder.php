<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $roles = [
            ['name' => 'famille', 'role_id' => '1'],
            ['name' => 'pro', 'role_id' => '2'],
            ['name' => 'admin', 'role_id' => '3']
        ];

        DB::table('roles')->insert($roles);
    }
}
