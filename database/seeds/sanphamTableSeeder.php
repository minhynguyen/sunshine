<?php

use Illuminate\Database\Seeder;

class sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Hoa Hồng", "Mốp cắm hoa", "Hoa Hồng Cưới", "Hộp Hoa Hồng Giấy", "Kệ Hoa gỗ", "Bình Sành Trụ", "Hoa Hộp Gỗ"];
        $type2 = ["15000", "250000", "450000","190000", "160000", "120000", "55000", "125000"];
        $type3 = ["25000", "350000", "550000","290000", "260000", "220000", "65000", "225000"];
        $type4 = ["Hoa Hồng Đà Lạt", "Mềm, dễ cắm", "Bó Hoa Cưới Hiện Đại, Lịch Sự, Trang Nhã","Hộp Hoa Trái Tim", "Nhẹ", "Bình Sành Bền, Nhẹ", "Hộp Hoa làm bằng gỗ"];
        $type5 = ["1", "2", "3", "4", "5", "6", "7", "8"];
        $type7 = ["3*", "2*", "3*", "4*", "5*", "4*", "2*", "5*"];
        $type6 = "NULL";
        
        
        sort($type);
        sort($type2);
        sort($type3);
        sort($type4);
        sort($type5);
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'sp_ma' => $i,
               'sp_ten' => $type[$i-1],
               'sp_giagoc' => $type2[$i-1],
               'sp_giaban' => $type3[$i-1], 
               'sp_hinh' => $type6,
               'sp_thongtin' => $type4[$i-1],
               'sp_danhgia' => $type7[$i-1],
               'l_ma' => $type5[$i-1],
                
            ]);
        }
            DB::table('sanpham')->insert($list);
    }
}
