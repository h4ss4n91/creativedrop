<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection22Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_22', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('style', 150);
            $table->string('heading_1', 150);
            $table->string('heading_2', 150);
            $table->string('btn_label', 150);
            $table->string('image', 150);
            $table->string('video', 150);
            $table->string('heading', 150);
            $table->string('btn_label_2', 150);
            $table->string('text', 150);
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
        Schema::dropIfExists('section_22');
    }
}
