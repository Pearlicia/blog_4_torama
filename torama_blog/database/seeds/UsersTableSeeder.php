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
        $user = App\User::create([
            'name' => 'Pearl',
            'email' => 'pearl@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Some little things about me. I will tell you depending on how you ask, goodluck',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
