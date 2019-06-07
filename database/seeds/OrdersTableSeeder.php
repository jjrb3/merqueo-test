<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('orders')->insert([
            'id' => 1,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 1
        ]);
        DB::table('orders')->insert([
            'id' => 2,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 2
        ]);
        DB::table('orders')->insert([
            'id' => 3,
            'priority' => 3,
            'delivery_date' => '2019-03-01',
            'client_id' => 3
        ]);
        DB::table('orders')->insert([
            'id' => 4,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 4
        ]);
        DB::table('orders')->insert([
            'id' => 5,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 5
        ]);
        DB::table('orders')->insert([
            'id' => 6,
            'priority' => 2,
            'delivery_date' => '2019-03-01',
            'client_id' => 6
        ]);
        DB::table('orders')->insert([
            'id' => 7,
            'priority' => 2,
            'delivery_date' => '2019-03-01',
            'client_id' => 7
        ]);
        DB::table('orders')->insert([
            'id' => 8,
            'priority' => 7,
            'delivery_date' => '2019-03-01',
            'client_id' => 8
        ]);
        DB::table('orders')->insert([
            'id' => 9,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 9
        ]);
        DB::table('orders')->insert([
            'id' => 15,
            'priority' => 9,
            'delivery_date' => '2019-03-01',
            'client_id' => 1
        ]);
        DB::table('orders')->insert([
            'id' => 10,
            'priority' => 1,
            'delivery_date' => '2019-03-01',
            'client_id' => 10
        ]);
        DB::table('orders')->insert([
            'id' => 11,
            'priority' => 10,
            'delivery_date' => '2019-03-01',
            'client_id' => 11
        ]);
        DB::table('orders')->insert([
            'id' => 12,
            'priority' => 2,
            'delivery_date' => '2019-03-01',
            'client_id' => 12
        ]);
        DB::table('orders')->insert([
            'id' => 13,
            'priority' => 3,
            'delivery_date' => '2019-03-01',
            'client_id' => 13
        ]);
        DB::table('orders')->insert([
            'id' => 14,
            'priority' => 8,
            'delivery_date' => '2019-03-01',
            'client_id' => 14
        ]);
    }
}
