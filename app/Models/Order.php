<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public $timestamps = false;
    protected $table = "orders";


    /**
     * Get all enlisted products greater than 0
     *
     * @return Object \Exception
     */
    public static function getQuantitySoldProduct(string $date) {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',
                DB::raw('SUM(quantity_products.quantity) AS quantity')
            )
                ->join('quantity_products', 'quantity_products.inventory_id', 'inventories.id')
                ->join('orders', 'quantity_products.order_id', 'orders.id')

                ->where('orders.delivery_date', $date)
                ->groupBy(
                    'inventories.id',
                    'inventories.product_name'
                )

                ->orderBy('quantity')
                ->get();
        }
        catch (\Exception $e) {
            return $e;
        }
    }

    /*
     SELECT i.id,
       i.product_name,
       SUM(qp.quantity) AS quantity
FROM inventories i
INNER JOIN quantity_products qp ON  qp.inventory_id  = i.id
INNER JOIN orders o             ON  qp.order_id      = o.id

WHERE o.delivery_date  = '2019-03-01'

GROUP BY i.id,
         i.product_name

ORDER BY quantity ASC
     */
}
