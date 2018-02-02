<?php

use Illuminate\Database\Seeder;

class khuyenmai_sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type4 = ["1", "2", "3", "4", "5", "6"];
        for($i= 1; $i <= count($type4); $i++){
            array_push($list, [
               'km_ma' => random_int(1, count($type4)),
               'sp_ma' => random_int(1, count($type4)+1),
               'm_ma' => random_int(1, count($type4)+1),
            ]);
        }
            DB::table('khuyenmai_sanpham')->insert($list);
    }
}
