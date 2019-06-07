<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_providers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('invetory_id');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('invetory_id')->references('id')->on('inventories');

            $table->unique(['provider_id','invetory_id']);
        });

        $class = new ProductProvidersTableSeeder();
        $class->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_providers');
    }
}
