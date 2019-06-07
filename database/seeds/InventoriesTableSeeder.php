<?php

use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([
            'id' => 1,
            'product_name' => 'Leche',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 2,
            'product_name' => 'Huevos',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 3,
            'product_name' => 'Manzana Verde',
            'quantity' => 7,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 4,
            'product_name' => 'Pepino Cohombro',
            'quantity' => 8,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 5,
            'product_name' => 'Pimentón Rojo',
            'quantity' => 10,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 6,
            'product_name' => 'Kiwi',
            'quantity' => 15,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 7,
            'product_name' => 'Cebolla Cabezona Blanca Limpia',
            'quantity' => 26,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 8,
            'product_name' => 'Habichuela',
            'quantity' => 11,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 9,
            'product_name' => 'Mango Tommy Maduro',
            'quantity' => 1,
            'date' => '2019-03-01'
        ]);


        DB::table('inventories')->insert([
            'id' => 10,
            'product_name' => 'Tomate Chonto Pintón',
            'quantity' => 8,
            'date' => '2019-03-01'
        ]);

        DB::table('inventories')->insert([
            'id' => 11,
            'product_name' => 'Zanahoria Grande',
            'quantity' => 7,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 12,
            'product_name' => 'Aguacate Maduro',
            'quantity' => 8,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 13,
            'product_name' => 'Kale o Col Rizada',
            'quantity' => 2,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 14,
            'product_name' => 'Cebolla Cabezona Roja Limpia',
            'quantity' => 1,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 15,
            'product_name' => 'Tomate Chonto Maduro',
            'quantity' => 1,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 16,
            'product_name' => 'Acelga',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 17,
            'product_name' => 'Espinaca Bogotana x 500grs',
            'quantity' => 17,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 18,
            'product_name' => 'Ahuyama',
            'quantity' => 8,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 19,
            'product_name' => 'Cebolla Cabezona Blanca Sin Pelar',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);


        DB::table('inventories')->insert([
            'id' => 20,
            'product_name' => 'Melón',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 21,
            'product_name' => 'Cebolla Cabezona Roja Sin Pelar',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 22,
            'product_name' => 'Cebolla Larga Junca x 500grs',
            'quantity' => 6,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 23,
            'product_name' => 'Hierbabuena x 500grs',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 24,
            'product_name' => 'Lechuga Crespa Verde',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 25,
            'product_name' => 'Limón Tahití',
            'quantity' =>  10,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 26,
            'product_name' => 'Mora de Castilla',
            'quantity' => 40,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 27,
            'product_name' => 'Pimentón Verde',
            'quantity' => 2,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 28,
            'product_name' => 'Tomate Larga Vida Maduro',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 29,
            'product_name' => 'Cilantro x 500grs',
            'quantity' => 2,
            'date' => '2019-03-01'
        ]);


        DB::table('inventories')->insert([
            'id' => 30,
            'product_name' => 'Fresa Jugo',
            'quantity' => 1,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 31,
            'product_name' => 'Papa R-12 Mediana',
            'quantity' => 9,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 32,
            'product_name' => 'Curuba',
            'quantity' => 10,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 33,
            'product_name' => 'Brócoli',
            'quantity' => 2,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 34,
            'product_name' => 'Aguacate Hass Pintón',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 35,
            'product_name' => 'Aguacate Hass Maduro',
            'quantity' => 3,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 36,
            'product_name' => 'Aguacate Pintón',
            'quantity' => 6,
            'date' => '2019-03-01'
        ]);


        // Others products
        DB::table('inventories')->insert([
            'id' => 37,
            'product_name' => 'Pan Bimbo',
            'quantity' => 0,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 39,
            'product_name' => 'Lechuga Crespa Morada',
            'quantity' => 0,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 41,
            'product_name' => 'Banano 1',
            'quantity' => 0,
            'date' => '2019-03-01'
        ]);
        DB::table('inventories')->insert([
            'id' => 43,
            'product_name' => 'Banano 2',
            'quantity' => 0,
            'date' => '2019-03-01'
        ]);
    }
}
