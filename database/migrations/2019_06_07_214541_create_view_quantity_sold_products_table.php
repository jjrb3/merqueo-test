<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewQuantitySoldProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE VIEW view_quantity_sold_products AS
            SELECT i.id,
                   o.delivery_date,
                   i.product_name,
                   SUM(qp.quantity) AS quantity
            FROM inventories i
            INNER JOIN quantity_products qp ON  qp.inventory_id  = i.id
            INNER JOIN orders o             ON  qp.order_id      = o.id
            
            GROUP BY i.id,
                     o.delivery_date,
                     i.product_name
            
            ORDER BY o.delivery_date DESC
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW view_quantity_sold_products');
    }
}
