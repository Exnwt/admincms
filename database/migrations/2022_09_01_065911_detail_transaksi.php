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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->references('id')->on('transaksi');
            $table->foreignId('product_id')->references('id')->on('produks');
            $table->integer('qty');
            $table->decimal('price_satuan');
            $table->decimal('price_total');
            $table->decimal('price_purchase_satuan');
            $table->decimal('price_purchase_total');
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
        //
    }
};
