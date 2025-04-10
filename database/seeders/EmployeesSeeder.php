<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'nip' => 'PEG-001',
                'nama' => 'bagastya',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Bali',
                'no_handphone' => '0812345678',
                'jabatan' => 'Admin',
                'id_lokasi_presensi' => 1,
                'foto' => 'bagastya.jpg'
            ],
            [
                'nip' => 'PEG-002',
                'nama' => 'budi',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Bali',
                'no_handphone' => '0812345679',
                'jabatan' => 'marketing',
                'id_lokasi_presensi' => 2,
                'foto' => 'budi.jpg'
            ],
        ]);
    }
}
