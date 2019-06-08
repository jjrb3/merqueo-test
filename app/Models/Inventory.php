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
                'clients.address',
                'clients.name',
                'orders.delivery_date',
                DB::raw('MAX(orders.priority) AS priority'),
                DB::raw('GROUP_CONCAT(DISTINCT quantity_products.order_id) AS orders_id')
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')
                ->join('orders', 'quantity_products.order_id', 'orders.id')
                ->join('clients', 'orders.client_id', 'clients.id')

                ->groupBy(
                    'clients.address',
                    'clients.name',
                    'orders.delivery_date'
                )
                ->orderBy('priority', 'desc')
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
    public static function getProductsByOrders(string $order) {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',
                DB::raw('SUM(quantity_products.quantity) AS quantity')
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')

                ->whereIn('quantity_products.order_id', explode(',', $order))

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
     * Get products to prepare and supply
     *
     * @param int $orderId
     * @return \Exception
     */
    public static function getProductsToPrepareAndSupply(int $orderId) {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',

                DB::raw("
                    CASE
                       WHEN quantity_products.quantity > inventories.quantity THEN 'Supplied'
                       ELSE 'Prepare'
                    END AS type
                "),
                DB::raw("
                    CASE
                        WHEN quantity_products.quantity > inventories.quantity THEN (
                           SELECT p.name
                           FROM providers p
                           INNER JOIN product_providers pp on p.id = pp.provider_id
                           WHERE pp.invetory_id = inventories.id
                        )
                        ELSE ''
                    END AS providers
                "),
                DB::raw("
                    CASE
                       WHEN quantity_products.quantity > inventories.quantity 
                            THEN quantity_products.quantity - inventories.quantity
                            
                       ELSE quantity_products.quantity
                    END AS quantity
                ")
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')
                ->join('orders', 'quantity_products.order_id', 'orders.id')

                ->where('orders.id', $orderId)

                ->orderBy('type')
                ->get();
        }
        catch (\Exception $e) {
            return $e;
        }
    }


    /**
     * Get inventory for the following months
     *
     * @return \Exception
     */
    public static function getInventoryFotTheFollowingMonths() {
        try {
            return Inventory::select(
                'inventories.id',
                'inventories.product_name',

                DB::raw('SUM(quantity_products.quantity) - inventories.quantity AS quantity')
            )
                ->join('quantity_products', 'inventories.id', 'quantity_products.inventory_id')
                ->join('orders', 'quantity_products.order_id', 'orders.id')

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
}
