<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            'id' => 1,
            'name' => 'Ruby'
        ]);
        DB::table('providers')->insert([
            'id' => 2,
            'name' => 'Raul'
        ]);
        DB::table('providers')->insert([
            'id' => 3,
            'name' => 'Angelica'
        ]);
    }
}
