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
            $table->foreignId('id_post')->constrained('memes')->onDelete('cascade');
            $table->foreignId('id_denunciator')->constrained('users')->onDelete('cascade');
            $table->string('spam')->nullable();
            $table->string('nudity')->nullable();
            $table->string('violence')->nullable();
            $table->string('hate')->nullable();
            $table->string('suicide')->nullable();
            $table->string('other')->nullable();
            $table->string('text_other')->nullable();
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
