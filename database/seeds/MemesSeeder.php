<?php

use Illuminate\Database\Seeder;

class MemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memes')->insert([
            'name'=>'Sou Faraó feat. Meu nome é Julia',
            'link'=>'https://www.youtube.com/watch?v=vi2Xn9d_Or8',
            'year'=>'2015',
            'upload_date'=>now()
        ]);
    }
}
