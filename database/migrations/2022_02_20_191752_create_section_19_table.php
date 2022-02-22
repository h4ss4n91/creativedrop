<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection19Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_19', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('name', 150);
            $table->string('padding_bottom', 100);
            $table->string('padding_top', 100);
            $table->string('image', 150);
            $table->string('title', 150);
            $table->string('paragraph', 150);
            $table->string('link', 150);
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
        Schema::dropIfExists('section_19');
    }
}
