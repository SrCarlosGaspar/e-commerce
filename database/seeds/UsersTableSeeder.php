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
            'name'     => 'Carlos Gaspar',
            'email'    => 'carlos@gmail.com',
            'password' => bcrypt('carlos'),
            'nivel'    => 'Admin',
            'telefone' => 921052582
        ]);
    }
}
