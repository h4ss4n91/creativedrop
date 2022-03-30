<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('name',120);
            $table->integer('paddingTop');
            $table->integer('paddingBottom');
            $table->string('image',260);
            $table->string('text1',250);
            $table->string('text2',260);
            $table->string('contacT_button_link',125);
            $table->string('status',120);
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
        Schema::dropIfExists('sliders');
    }
}
