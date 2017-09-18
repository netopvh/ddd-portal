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
        DB::table('users')->insert([
            'name' => 'Angelo Neto',
            'username' => '3335',
            'email' => 'angelo.neto@fiero.org.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
