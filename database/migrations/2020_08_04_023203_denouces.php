<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Denouces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denounces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_post')->constrained('memes');
            $table->foreignId('id_denunciator')->constrained('users');
            $table->boolean('spam');
            $table->boolean('nudity');
            $table->boolean('violence');
            $table->boolean('hate');
            $table->boolean('suicide');
            $table->boolean('other');
            $table->string('text-other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
