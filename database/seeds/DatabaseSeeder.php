<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(loaiTableSeeder::class);
//        $this->call(xuatxuTableSeeder::class);
//        $this->call(nhacungcapTableSeeder::class);
//        $this->call(mauTableSeeder::class);
//        $this->call(mau_sanphamTableSeeder::class);
//        $this->call(chudeTableSeeder::class);
//        $this->call(chude_sanphamTableSeeder::class);
//        $this->call(quyenTableSeeder::class);
//        $this->call(nhanvienTableSeeder::class);
//        $this->call(khuyenmaiTableSeeder::class);
//        $this->call(khuyenmai_sanphamTableSeeder::class);
        $this->call(khachhangTableSeeder::class);
        
    }
}
