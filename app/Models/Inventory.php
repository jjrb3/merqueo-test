<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    public $timestamps = false;
    protected $table = "inventories";


    /**
     * Get all enlisted products greater than 0
     *
     * @return Object \Exception
     */
    public static function getEnlistedProducts() {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',
                'inventories.date',

                DB::raw('
                    CASE
                        WHEN SUM(quantity_products.quantity) > inventories.quantity THEN inventories.quantity
                        ELSE SUM(quantity_products.quantity)
                    END AS enlisted_products
                ')
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')
                ->where('inventories.quantity', '>', 0)
                ->groupBy(
                    'inventories.id',
                    'inventories.product_name'
                )

                ->orderBy('inventories.product_name')
                ->get();
        }
        catch (\Exception $e) {
            return $e;
        }
    }


    /**
     * Get all enlisted products greater than 0
     *
     * @return Object \Exception
     */
    public static function getProductsToPrepare() {
        try {
            return Inventory::select(
                'orders.id',
                'orders.priority',
                'clients.address',
                'clients.name',
                'orders.delivery_date'
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')
                ->join('orders', 'quantity_products.order_id', 'orders.id')
                ->join('clients', 'orders.client_id', 'clients.id')

                ->orderBy('clients.name')
                ->get();
        }
        catch (\Exception $e) {
            return $e;
        }
    }


    /**
     * Get products by order
     *
     * @return Object \Exception
     */
    public static function getProductsByOrder(int $order) {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',
                'quantity_products.quantity'
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')

                ->where('quantity_products.order_id', $order)

                ->orderBy('inventories.product_name')
                ->get();
        }
        catch (\Exception $e) {
            return $e;
        }
    }

}
