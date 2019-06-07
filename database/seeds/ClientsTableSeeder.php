<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('clients')->insert([
            'name' => 'Sofia',
            'address' => 'KR 14 # 87 - 20'
            ]);
        DB::table('clients')->insert([
            'name' => 'Angel',
            'address' => 'KR 20 # 164A - 5'
        ]);
        DB::table('clients')->insert([
            'name' => 'Hocks',
            'address' => 'KR 13 # 74 - 38'
        ]);
        DB::table('clients')->insert([
            'name' => 'Michael',
            'address' => 'CL 93 # 12 - 9'
        ]);
        DB::table('clients')->insert([
            'name' => 'Bar de Alex',
            'address' => 'CL 71 # 3 - 74'
        ]);
        DB::table('clients')->insert([
            'name' => 'Sabor Criollo',
            'address' => 'KR 20 # 134A - 5'
        ]);
        DB::table('clients')->insert([
            'name' => 'El Pollo Rojo',
            'address' => 'CL 80 # 14 - 38'
        ]);
        DB::table('clients')->insert([
            'name' => 'All Salad',
            'address' => 'KR 14 # 98 - 74'
        ]);
        DB::table('clients')->insert([
            'name' => 'Parrilla y sabor',
            'address' => 'KR 58 # 93 - 1'
        ]);
        DB::table('clients')->insert([
            'name' => 'restaurante yerbabuen',
            'address' => 'CL 93B # 17 - 12'
        ]);
        DB::table('clients')->insert([
            'name' => 'Luis David',
            'address' => 'KR 68D # 98A - 11'
        ]);
        DB::table('clients')->insert([
            'name' => 'David Carruyo',
            'address' => 'AC 72 # 20 - 45'
        ]);
        DB::table('clients')->insert([
            'name' => 'MARIO',
            'address' => 'KR 22 # 122 - 57'
        ]);
        DB::table('clients')->insert([
            'name' => 'Harold',
            'address' => 'KR 88 # 72A - 26'
        ]);
    }
}
