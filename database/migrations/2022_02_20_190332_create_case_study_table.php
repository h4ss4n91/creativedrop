<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_study', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->integer('page_id');
            $table->string('image', 350);
            $table->string('title', 350);
            $table->string('short_description', 350);
            $table->string('link', 350);
            $table->string('service', 150);
            $table->string('sub_category', 150);
            $table->string('industry', 150);
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
        Schema::dropIfExists('case_study');
    }
}
