<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection23Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_23', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('heading', 150);
            $table->string('title', 150);
            $table->integer('padding_top');
            $table->integer('padding_bottom');
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
        Schema::dropIfExists('section_23');
    }
}
