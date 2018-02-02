<?php

use Illuminate\Database\Seeder;

class mau_sanphamTableSeeder extends Seeder
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
        $type1 = ["10", "20", "30", "40", "50", "60", "70"];
        sort($type);
        sort($type1);
        
        $today = new DateTime('2014-12-14 21:18:00');
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
                
               'sp_ma' => random_int(1, $type[$i-1]), 
               'm_ma' => random_int(1, $type[$i-1]),
               'msp_soluong' => random_int(1, $type1[$i-1]),
               
                
            ]);
        }
            DB::table('mau_sanpham')->insert($list);
    }
}
