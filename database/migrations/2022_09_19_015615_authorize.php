<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('authorizes', function (Blueprint $table){
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles');
            $table->foreignId('authorize_type_id')->references('id')->on('authorize_types');
            $table->foreignId('menu_id')->references('id')->on('menus');
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
        schema::dropIfExists('authorizes');
    }
};
