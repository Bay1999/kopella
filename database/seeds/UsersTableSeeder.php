<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            [
            'name' => 'Admin Admin',
            'isAdmin' => '1',
            'email' => 'admin@paper.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Bayu',
                'isAdmin' => '0',
                'email' => 'bayu@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('bayudong'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
