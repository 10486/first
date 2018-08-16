<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::make([
          'name'=>env('ADMIN_NAME'),
          'email'=>env('ADMIN_EMAIL'),
          'password'=>bcrypt(env('ADMIN_PASSWORD','secret'))
        ])->save();
    }
}
