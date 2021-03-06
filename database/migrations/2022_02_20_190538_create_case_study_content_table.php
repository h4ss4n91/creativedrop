<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudyContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_study_content', function (Blueprint $table) {
            $table->id();
            $table->integer('case_study_id');
            $table->string('image', 150);
            $table->string('image_name', 150);
            $table->string('type', 150);
            $table->string('video_link', 550);
            $table->string('video_name', 150);
            $table->string('image_style', 150);
            $table->string('video_style', 150);
            $table->string('video_background', 150);

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
        Schema::dropIfExists('case_study_content');
    }
}
