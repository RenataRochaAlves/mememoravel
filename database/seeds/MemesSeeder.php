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
            'name' => 'Rap dos Memes',
            'link' => 'https://www.youtube.com/embed/YtpATpMKDkg',
            'year' => '2011',
            'upload_date' => now(),
            'user_id' => '1'
        ]);
        DB::table('memes')->insert([
            'name' => 'Que viagem é essa véi',
            'link' => 'https://www.youtube.com/embed/ydWwqy_FGOk',
            'year' => '2015',
            'upload_date' => now(),
            'user_id' => '1'
        ]);
        DB::table('memes')->insert([
            'name' => 'Cabeleleila Leila',
            'link' => 'https://www.youtube.com/embed/XsYVERo8FtQ',
            'year' => '2020',
            'upload_date' => now(),
            'user_id' => '1'
        ]);
    }
}
