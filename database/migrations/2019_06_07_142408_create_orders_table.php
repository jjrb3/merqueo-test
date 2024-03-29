<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('priority')->nullable(false);
            $table->date('delivery_date')->nullable(false);

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
        });

        $class = new OrdersTableSeeder();
        $class->run();
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
