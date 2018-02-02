<?php

use Illuminate\Database\Seeder;

class xuatxuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Đà Lạt", "Cần Thơ", "Trung Quốc", "Mỹ", "Anh", "Pháp"];
        sort($type);
        $today = new DateTime('2014-12-14 21:18:00');
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'xx_ma' => $i,
               'xx_ten' => $type[$i-1],
               'xx_taomoi' => $today->format('Y-m-d H:i:s'),
               'xx_capnhat' => $today->format('Y-m-d H:i:s'),
                
            ]);
        }
            DB::table('xuatxu')->insert($list);
    }
    
}
