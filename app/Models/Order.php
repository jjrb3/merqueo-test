<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public $timestamps = false;
    protected $table = "orders";


    /**
     * Get less sold product
     *
     * @return Object \Exception
     */
    public static function getLessSoldProduct(string $date) {
        try {
            return DB::select("
                SELECT *
                FROM view_quantity_sold_products
                WHERE quantity = (
                    SELECT MIN(quantity)
                    FROM view_quantity_sold_products
                    WHERE delivery_date = '{$date}'
                )
                AND delivery_date = '{$date}'
                ORDER BY product_name
            ");
        }
        catch (\Exception $e) {
            return $e;
        }
    }
}
