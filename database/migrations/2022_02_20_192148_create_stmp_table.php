<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stmp', function (Blueprint $table) {
            $table->id();
            $table->text('host');
            $table->string('username', 1000);
            $table->string('password', 1000);
            $table->string('port', 255);
            $table->string('encpt', 255);
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
        Schema::dropIfExists('stmp');
    }
}
