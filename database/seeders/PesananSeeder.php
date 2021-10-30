<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['nama_pelanggan' => 'Norman','nama_barang' => 'Baju','qty' => 10000,'tgl_pesanan' => '2010-10-20'],
            ['nama_pelanggan' => 'Zulfan', 'nama_barang' => 'Motor', 'qty' => 20000, 'tgl_pesanan' => '2020-09-21'],
            ['nama_pelanggan' => 'iqbal', 'nama_barang' => 'Mobil', 'qty' => 50000, 'tgl_pesanan' => '2005-08-22'],
            ['nama_pelanggan' => 'Kiki', 'nama_barang' => 'Handphone', 'qty' => 40000, 'tgl_pesanan' => '2004-07-24'],
            ['nama_pelanggan' => 'Resta', 'nama_barang' => 'Meja', 'qty' => 30000, 'tgl_pesanan' => '2016-06-21']

            ];
            DB::table('pesanan')->insert($data);
    }
}
