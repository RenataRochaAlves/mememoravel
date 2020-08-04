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
        DB::table('users')->insert([
            'name' => 'Gabriel Souto',
            'email' => 'gabrielsouto@gmail.com',
            'password' => Hash::make('haha1212'),
            'username' => 'gabrielluiz',
            'avatar' => 'img/avatar/avatar44.png'
        ]);
    }
}
