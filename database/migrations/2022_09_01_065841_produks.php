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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->foreignId('produk_kategori_id')->references('id')->on('produk_kategoris');
            $table->decimal('price');
            $table->decimal('purchase_price');
            $table->string('short_description');
            $table->text('description');
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('new_product')->default('1');
            $table->tinyInteger('best_seller')->default('1');
            $table->tinyInteger('featured')->default('1');
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
        Schema::dropIfExists('produks');
    }
};
