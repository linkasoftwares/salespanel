<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->dateTimeTz('date');
            $table->json('attributes')->nullable();
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->text('details')->nullable();

            $table->foreign('color_id')
            ->references('id')
            ->on('colors');

            $table->foreign('size_id')
            ->references('id')
            ->on('sizes');

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
        Schema::dropIfExists('orders');
    }
}
