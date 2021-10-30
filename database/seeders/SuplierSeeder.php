<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['nama' => 'Norman', 'alamat' => 'Rancamanyar', 'kode_pos' => 464776, 'kota' => 'Bandung'],
            ['nama' => 'Zulfan', 'alamat' => 'Rancamanyar', 'kode_pos' => 464776, 'kota' => 'Bandung'],
            ['nama' => 'Kiki', 'alamat' => 'Rancamanyar', 'kode_pos' => 464776, 'kota' => 'Bandung'],
            ['nama' => 'Resta', 'alamat' => 'Rancamanyar', 'kode_pos' => 464776, 'kota' => 'Bandung'],
            ['nama' => 'Iqbal', 'alamat' => 'Rancamanyar', 'kode_pos' => 464776, 'kota' => 'Bandung']
            ];
            DB::table('suplier')->insert($data);
    }
}
