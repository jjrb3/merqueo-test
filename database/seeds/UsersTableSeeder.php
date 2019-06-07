<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['cost' => 13];

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Jeremy Reyes B.',
            'email' => 'jjrb6@hotmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => password_hash("123", PASSWORD_BCRYPT, $options),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Merqueo',
            'email' => 'test@merqueo.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => password_hash("M3rqu30.", PASSWORD_BCRYPT, $options),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
