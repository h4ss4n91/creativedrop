<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_id',255);
            $table->string('item_name',255);
            $table->string('item_link',255);
            $table->integer('sorting');
            $table->string('featured_service',100);
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
        Schema::dropIfExists('child_menus');
    }
}
