<?php

use Illuminate\Database\Seeder;

class nhacungcapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Thành An", "Minh Ý", "Đại Tâm", "Thành Công", "Đại Lợi", "Thanh Hoa"];
        $type1 = ["3 tháng 2 Cần Thơ", "14 Trần Hưng Đạo An Giang", "Quốc Lộ 1A Tiền Giang", "Đồng Tháp", "Sa Đéc", "Vĩnh Long"];
        $type2 = ["Nguyễn Văn A", "Trần Văn C", "Đỗ Thị C", "Võ Minh Tài", "Nguyên Minh Ý", "Trần E"];
        $type3 = ["0909888777", "0939555666", "0123453456", "0909878241", "0907430402", "0974839962"];
        $type4 = ["minhy@gmail.com", "minhynguyen@gmail.com", "minhy123@gmail.com", "Nguyeny@gmail.com", "nguyenminhy@gmail.com", "nguyenvan@gmail.com"];
        $type5 = ["1", "2", "3", "4", "5", "6"];
        
        sort($type);
        sort($type1);
        sort($type2);
        sort($type3);
        sort($type4);
        sort($type5);
        $today = new DateTime('2014-12-14 21:18:00');
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'ncc_ma' => $i,
               'ncc_ten' => $type[$i-1],
               'ncc_daidien' => $type2[$i-1],
               'ncc_diachi' => $type1[$i-1],
               'ncc_dienthoai' => $type3[$i-1],
               'ncc_email' => $type4[$i-1],
               'ncc_taomoi' => $today->format('Y-m-d H:i:s'),
               'ncc_capnhat' => $today->format('Y-m-d H:i:s'),
               'xx_ma' => random_int(1, $type5[$i-1]),
                
            ]);
        }
            DB::table('nhacungcap')->insert($list);
    }
}
