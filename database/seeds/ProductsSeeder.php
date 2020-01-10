<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
 
            // insert data ke table pegawai menggunakan Faker
            DB::table('products')->insert([
              'nama_produk' => $faker->word,
              'barcode' => $faker->isbn13,
              'harga' => $faker->numberBetween($min = 5000, $max = 30000),
              'img' => $faker->imageUrl($width = 640, $height = 480),
              'nama_pemasok' => $faker->name
             ]);
   
  }
    }
}
