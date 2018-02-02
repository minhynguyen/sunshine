<?php

use Illuminate\Database\Seeder;

class loaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Hoa lẻ", "phụ Kiện", "Bó Hoa", "Hoa hộp giấy", "Kệ hoa", "Vòng hoa", "Bình hoa", "Hoa hộp gỗ"];
        sort($type);
        $today = new DateTime('2014-12-14 21:10:00');
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'l_ma' => $i,
               'l_ten' => $type[$i-1],
               'l_taomoi' => $today->format('Y-m-d H:i:s'),
               'l_capnhat' => $today->format('Y-m-d H:i:s'),
                
                
            ]);
        }
        DB::table('loai')->insert($list);
    }
}
