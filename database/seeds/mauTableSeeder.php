<?php

use Illuminate\Database\Seeder;

class mauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Hồng", "Đỏ", "Cam", "Trắng", "Tím", "Vàng", "Nâu"];
        
        
        
        sort($type);
       
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'm_ma' => $i,
               'm_ten' => $type[$i-1],
            ]);
        }
            DB::table('mau')->insert($list);
    
    }
}
