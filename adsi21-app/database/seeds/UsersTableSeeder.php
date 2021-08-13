<?php

use App\User;
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
        User::create([
            'name' => 'Israel Arbona Guerrero',
            'email' => 'i.arbona@misena.edu.co',
            'password' => bcrypt('1'),
        ]);

        User::create([
            'name' => 'Israel Arbona',
            'email' => 'i.arbona@gmail.com',
            'password' => bcrypt('1'),
        ]);
    }
}
