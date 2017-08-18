<?php

use Illuminate\Database\Migrations\Migration;
use CodeFlix\Models\User;
class CreateUserAdminData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name'=>env('ADMIN_DEFAULT_NAME','Admin'),
            'email'=>env('ADMIN_DEFAULT_EMAIL','admin@webmestre.com.br'),
            'password'=>bcrypt(env('ADMIN_DEFAULT_PASSWORD','secret')),
            'role'=>\CodeFlix\Models\User::ROLE_ADMIN

            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $user = User::where('email',env('ADMIN_DEFAULT_EMAIL','admin@webmestre.com.br'))->first();
        if($user instanceof User){
            $user->delete();
        }
    }
}
