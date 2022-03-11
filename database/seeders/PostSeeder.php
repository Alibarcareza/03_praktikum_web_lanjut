<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['nama_jasa' => 'Marketing',
            'Deskripsi' => 'Marketing online dengan promosi product dari anda',
            'Lama Pengerjaan' => '1 Bulan',
            'Harga' => 'Rp.500.000,00'
        ],
            ['nama_jasa' => 'Website',
            'Deskripsi' => 'Pembuatan segala website sesuai request anda',
            'Lama Pengerjaan' => '3 Bulan - 6 bulan',
            'Harga' => 'Rp.1.500.000,00 - 10.000.000,00'
        ],
            ['nama_jasa' => 'Model Product',
            'Deskripsi' => 'Pembuatan segala macam product sesuai rancangan anda',
            'Lama Pengerjaan' => '1 Bulan',
            'Harga' => 'Rp.1.500.000,00 - 5.000.000,00'
        ],
            ['nama_jasa' => 'Social Media',
            'Deskripsi' => 'Pembuatan konten social media sesuai dengan keinginan anda',
            'Lama Pengerjaan' => '1 Minggu',
            'Harga' => 'Rp.500.000,00 - 1.000.000,00'
        ],
            ['nama_jasa' => 'Vidio',
            'Deskripsi' => 'Pembuatan vidio dengan tujuan atau konsep yang anda inginkan',
            'Lama Pengerjaan' => '1 Bulan',
            'Harga' => 'Rp.1.000.000,00 - 3.000.000,00'
            ]
            ]
        );

    }
}
