<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtiklesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikles', function (Blueprint $table) {
            $table->bigIncrements('idartikles');
            $table->string('slug', 255);
            $table->string('judul', 255);
            $table->string('isi', 255);
            $table->string('tag', 255);
            $table->bigInteger('users_idusers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikles');
    }
}
