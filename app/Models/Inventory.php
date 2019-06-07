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
}
