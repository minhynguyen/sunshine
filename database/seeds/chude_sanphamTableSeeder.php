<?php

use Illuminate\Database\Seeder;

class chude_sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["1", "2", "3", "4", "5", "6", "7"];
        sort($type);
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'sp_ma' => random_int(1, count($type)),
               'cd_ma' => random_int(1, count($type)),
            ]);
        }
            DB::table('chude_sanpham')->insert($list);
    }
}
