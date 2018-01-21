<?php

use Illuminate\Database\Seeder;

class coba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        	['kode_barang'=>'54273','nama_barang'=>'Aqua alam','harga'=>'2500'],
        	['kode_barang'=>'54763','nama_barang'=>'Aqua alam botol','harga'=>'3500'],
        ];

        DB::table('barangs')->insert($a);
    }
}
