<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class,30)->create();
        $user = $users[0];
        $user->name = '范徽林';
        $user->email = '785044154@qq.com';
        $user->save();
    }
}
