<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['nama' => 'Norman','jenis_kelamin' => 'Laki-laki','alamat' => 'Rancamanyar','kodepos' => 480992,'kota' => 'bandung','tgl_lahir' => '2005-09-10'],
            ['nama' => 'Zulfan', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'kodepos' => 498011,'kota' => 'bandung','tgl_lahir' => '2001-09-04'],
            ['nama' => 'iqbal', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'kodepos' => 420192,'kota' => 'bandung','tgl_lahir' => '2002-09-05'],
            ['nama' => 'Kiki', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'kodepos' => 4287701,'kota' => 'bandung','tgl_lahir' => '2003-09-14'],
            ['nama' => 'Resta', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'kodepos' => 4809312,'kota' => 'bandung','tgl_lahir' => '2004-09-24']

            ];
            DB::table('pembeli')->insert($data);
    }
}
