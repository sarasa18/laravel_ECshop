<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'ここに店名がはいります',
                'information' => 'ここにお店の情報がはいります。ここにお店の情報がはいります。ここにお店の情報がはいります。ここにお店の情報がはいります。',
                'filename' => '',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'ここに店名がはいります',
                'information' => 'ここにお店の情報がはいります。ここにお店の情報がはいります。ここにお店の情報がはいります。ここにお店の情報がはいります。',
                'filename' => '',
                'is_selling' => true,
            ],
        ]);
    }
}
