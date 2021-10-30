<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        ['nama_barang' => 'Baju','nama_supplier' => 'Norman','qty' => 10000,'tgl' => '2010-10-20'],
        ['nama_barang' => 'Kemeja', 'nama_supplier' => 'Iqbal', 'qty' => 20000, 'tgl' => '2020-09-21'],
        ['nama_barang' => 'Celana', 'nama_supplier' => 'Zulfan', 'qty' => 50000, 'tgl' => '2005-08-22'],
        ['nama_barang' => 'Hoodie', 'nama_supplier' => 'Resta', 'qty' => 40000, 'tgl' => '2004-07-24'],
        ['nama_barang' => 'Topi', 'nama_supplier' => 'Kiki', 'qty' => 30000, 'tgl' => '2016-06-21']

        ];
        DB::table('pembelian')->insert($data);
    }
}
