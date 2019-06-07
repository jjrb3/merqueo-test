<?php

use Illuminate\Database\Seeder;

class QuantityProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 1,
            'order_id' => 1
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 21,
            'inventory_id' => 2,
            'order_id' => 1
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 7,
            'inventory_id' => 37,
            'order_id' => 1
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 10,
            'inventory_id' => 3,
            'order_id' => 1
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 5,
            'inventory_id' => 4,
            'order_id' => 1
        ]);


        #2. Order
        DB::table('quantity_products')->insert([
            'quantity' => 100,
            'inventory_id' => 5,
            'order_id' => 2
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 60,
            'inventory_id' => 6,
            'order_id' => 2
        ]);


        #3. Order
        DB::table('quantity_products')->insert([
            'quantity' => 4,
            'inventory_id' => 7,
            'order_id' => 3
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 8,
            'order_id' => 3
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 4,
            'inventory_id' => 9,
            'order_id' => 3
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 8,
            'inventory_id' => 10,
            'order_id' => 3
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 5,
            'inventory_id' => 11,
            'order_id' => 3
        ]);


        #4. Order
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            "inventory_id" => 12,
            'order_id' => 4
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            "inventory_id" => 13,
            'order_id' => 4
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 4,
            "inventory_id" => 14,
            'order_id' => 4
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            "inventory_id" => 4,
            'order_id' => 4
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            "inventory_id" => 15,
            'order_id' => 4
        ]);


        #5. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1500,
            'inventory_id' => 16,
            'order_id' => 5
        ]);


        #6. Order
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 17,
            'order_id' => 6
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 18,
            'order_id' => 6
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 15,
            'order_id' => 6
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 19,
            'order_id' => 6
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 20,
            'order_id' => 6
        ]);


        #7. Order
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 21,
            'order_id' => 7
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 22,
            'order_id' => 7
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 23,
            'order_id' => 7
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 4,
            'inventory_id' => 39,
            'order_id' => 7
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 15,
            'inventory_id' => 24,
            'order_id' => 7
        ]);


        #8. Order
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 25,
            'order_id' => 8
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 26,
            'order_id' => 8
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 4,
            'inventory_id' => 22,
            'order_id' => 8
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 27,
            'order_id' => 8
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 5,
            'order_id' => 8
        ]);


        #9. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 22,
            'order_id' => 9
        ]);


        #10. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 7,
            'order_id' => 10
        ]);


        #11. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 41,
            'order_id' => 11
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 6,
            'inventory_id' => 19,
            'order_id' => 11
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 29,
            'order_id' => 11
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 17,
            'order_id' => 11
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 30,
            'order_id' => 11
        ]);


        #12. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 7,
            'order_id' => 12
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 25,
            'order_id' => 12
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 5,
            'order_id' => 12
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 25,
            'inventory_id' => 31,
            'order_id' => 12
        ]);


        #13. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 43,
            'order_id' => 13
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 30,
            'order_id' => 13
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 32,
            'order_id' => 13
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 33,
            'order_id' => 13
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 2,
            'inventory_id' => 28,
            'order_id' => 13
        ]);


        #14. Order
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 16,
            'order_id' => 14
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 34,
            'order_id' => 14
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 3,
            'inventory_id' => 35,
            'order_id' => 14
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 12,
            'order_id' => 14
        ]);
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 36,
            'order_id' => 14
        ]);


        #15. Order
        DB::table('quantity_products')->insert([
            'quantity' => 1,
            'inventory_id' => 28,
            'order_id' => 15
        ]);
    }
}
