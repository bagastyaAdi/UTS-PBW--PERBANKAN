<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClockInOutLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clock_in_out_locations')->insert([
            [
                'nama_lokasi' => 'Dot Coffe',
                'latitude' => '16.0230131',
                'longitude' => '33.31231231',
                'radius_presensi' => '50',
                'zona_waktu' => 'wita',
                'jam_masuk' => '07:30',
                'jam_keluar' => '17:00'
            ],
            [
                'nama_lokasi' => 'Dot Coffe 2',
                'latitude' => '12.0230131',
                'longitude' => '33.31231231',
                'radius_presensi' => '50',
                'zona_waktu' => 'wita',
                'jam_masuk' => '07:30',
                'jam_keluar' => '17:00'
            ],
        ]);
    }
}
