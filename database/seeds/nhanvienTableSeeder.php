<?php

use Illuminate\Database\Seeder;

class nhanvienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Nguyễn Minh Ý", "Lâm Hồng Duy", "Lương Mỹ Uyên", "Nguyễn Trường Giang", "Nguyễn Hoàng Thủy Tuyên", "Nguyễn Quốc Trung"];
        $type1 = ["minhy", "hongduy", "myuyen", "truonggiang", "kynkyn", "venus"];
        $type2 = ["minhy@gmail.com", "hongduy@gmail.com", "myuyen@gmail.com", "truonggiang@gmail.com", "kynkyn@gmail.com", "venus@gmail.com"];
        $type4 = ["1", "2", "3", "4", "5", "6"];
        $type3 = ["0", "0", "1", "0", "1", "0"];
        $pass= 'admin';
        $diachi = 'Cần Thơ';
        $ngaysinh = new DateTime('1996-10-10 21:10:00');
        $type5 = ["0909888777", "0909666777", "0909123456", "0939888666", "0909113114", "0907555444"];
        

        
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'nv_ma' => $i,
               'nv_hoten' => $type[$i-1],
               'nv_taikhoan' => $type1[$i-1],
               'nv_matkhau' => $pass,
               'nv_gioitinh' => $type3[$i-1],
               'nv_email' => $type2[$i-1],
               'nv_diachi' => $diachi,
               'nv_ngaysinh' => $ngaysinh->format('Y-m-d H:i:s'),
               'nv_dienthoai' => $type5[$i-1],
                'q_ma' => random_int(1, count($type4)),

                
            ]);
        }
            DB::table('nhanvien')->insert($list);
    }
}
