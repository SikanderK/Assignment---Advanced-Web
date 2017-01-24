<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new App\User;
      $user->name = 'Demo User';
      $user->email = 'demo@advancedweb.com';
      $user->password = bcrypt('password');
      $user->save();
    }
}
