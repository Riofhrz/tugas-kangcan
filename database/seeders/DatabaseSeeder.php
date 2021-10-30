<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // pengiriman data ke dalam table di DB
        $this->call(PostsSeeder::class);
        $this->call([BarangSeeder::class,PembelianSeeder::class,PembeliSeeder::class,PesananSeeder::class,SuplierSeeder::class]);
    }
}
