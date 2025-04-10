<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_pegawai' => 1,
                'email' => 'kbagastya1905@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'id_pegawai' => 2,
                'email' => 'andi@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'pegawai'
            ]
          
        ]);
    }
}
