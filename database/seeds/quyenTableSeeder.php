<?php

use Illuminate\Database\Seeder;

class quyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Giám Đốc", "Quản Trị", "Quản Lý Kho", "Kế Tóan", "Nhân viên kinh doanh", "Nhân viên giao hàng"];
        $type1 = ["Giám Đốc Cửa Hàng Hoa","IT", "Điều Hành Kho Hàng", "Quản lý thu chi", "Bán Hàng", "Shipper"];

        
        
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'q_ma' => $i,
               'q_ten' => $type[$i-1],
               'q_diengiai' => $type1[$i-1],
            ]);
        }
            DB::table('quyen')->insert($list);
    }
}
