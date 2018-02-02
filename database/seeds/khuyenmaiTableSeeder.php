<?php

use Illuminate\Database\Seeder;

class khuyenmaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $type = ["Hoa Rẻ Mùa Cưới", "Tri ân khách hàng", "Rộn ràng mùa hè", "Tri ân thầy cô", "Ưu đãi Sinh Viên", "Hoa Tươi Giá Tươi"];
        $type1 = ["Hoa cưới giá rẻ mùa cưới cho mọi người", "Giảm 10% cho khách hàng có hóa đơn trên 500000",  "Hoa hồng chỉ 15000/1 cành", "Giảm 20% cho mùa lễ 20/11", "Giảm 20% cho những bạn có thẻ sinh viên", "Giảm 30% cho hoa lẻ"];
        $type4 = ["1", "2", "3", "4", "5", "6"];
        $ngaybatdau = new DateTime('2017-12-16 07:10:00');
        for($i= 1; $i <= count($type); $i++){
            array_push($list, [
               'km_ma' => $i,
               'km_ten' => $type[$i-1],
               'km_noidung' => $type1[$i-1],
               'km_batdau' => $ngaybatdau->format('Y-m-d H:i:s'),
               'nv_nguoilap' => random_int(1, count($type4)),
               'nv_kynhay' => random_int(1, count($type4)),
               'nv_kyduyet' => random_int(1, count($type4)),
            ]);
        }
            DB::table('khuyenmai')->insert($list);
    }
}
