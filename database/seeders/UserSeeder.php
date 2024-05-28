<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name'=>'admin',
                'email'=>'admin@test.com',
                'password'=>bcrypt('12345'),
                'role'=>'admin'
            ],
            [
                'name'=>'customer',
                'email'=>'customer@test.com',
                'password'=>bcrypt('12345'),
                'role'=>'customer'
            ],
            [
                'name'=>'vendor',
                'email'=>'vendor@test.com',
                'password'=>bcrypt('12345'),
                'role'=>'vendor'
            ],
        ]);
    }
}
