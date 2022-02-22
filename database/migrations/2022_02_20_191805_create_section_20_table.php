<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection20Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_20', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('heading_1', 150);
            $table->string('heading_2', 150);
            $table->string('btn_label', 150);
            $table->string('btn_class', 150);
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
        Schema::dropIfExists('section_20');
    }
}
