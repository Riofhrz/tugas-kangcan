<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        ['nama' => 'Norman', 'varian' => 'Hitam', 'harga_beli' => 120000, 'harga_jual' => 200000],
        ['nama' => 'Zulfan', 'varian' => 'Putih', 'harga_beli' => 150000, 'harga_jual' => 250000],
        ['nama' => 'Kiki', 'varian' => 'Kuning', 'harga_beli' => 200000, 'harga_jual' => 300000],
        ['nama' => 'Resta', 'varian' => 'Biru', 'harga_beli' => 250000, 'harga_jual' => 350000],
        ['nama' => 'Iqbal', 'varian' => 'Coklat', 'harga_beli' => 300000, 'harga_jual' => 400000]
        ];
        DB::table('barang')->insert($data);
    }
}
