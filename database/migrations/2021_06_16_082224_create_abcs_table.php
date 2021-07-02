<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abcs', function (Blueprint $table) {
            $table->id();
            $table->string('name_one');
            $table->string('des_one');
            $table->string('gallery_one');

            $table->string('name_two');
            $table->string('des_two');

            $table->string('gallery_a');
            $table->string('name_a');
            $table->string('des_a');
            $table->string('gallery_b');
            $table->string('name_b');
            $table->string('des_b');
            $table->string('gallery_c');
            $table->string('name_c');
            $table->string('des_c');

            $table->string('h_two');

            $table->string('name_three');
            $table->string('des_three');
            $table->string('gallery_three');

            $table->string('name_four');
            $table->string('des_four');
            $table->string('gallery_four');

            $table->string('name_five');
            $table->string('des_five');
            $table->string('gallery_five');

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
        Schema::dropIfExists('abcs');
    }
}
