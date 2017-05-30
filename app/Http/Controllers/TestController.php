
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class TestController extends Controller
{
    public function users()
    {
        $users = DB::table('users')->get();
        var_dump($users);

        $roles = DB::table('roles')->get();
        var_dump($roles);

        $usersRoles = DB::table('role_user')->get();
        var_dump($usersRoles);

        //return view('user.index', ['users' => $users]);
    }

    public function testUserRole(){
        var_dump(\App\User::find(1)->isAdmin());
        var_dump(\App\User::find(2)->isAdmin());
        var_dump(\App\User::find(3)->isAdmin());
    }

    public function testAnnonces(){
        $user = User::find(2);
        foreach ($user->annonces as $annonce) {
            var_dump($annonce->text);
        }
    }

}
