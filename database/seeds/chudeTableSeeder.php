<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class chudeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $now = new Carbon('2017-12-16', 'Asia/Ho_Chi_Minh');
        $list = [];
        for($i = 1; $i <= 100; $i++){
            $created = $now->copy()->addSeconds($faker->numberBetween(1, 259200));
            $updated = $now->copy()->addSeconds($faker->numberBetween(1, 259200));
            array_push($list, [
                'cd_taomoi'=>$created,
                'cd_capnhat'=>$updated,
                'cd_ten' => $faker->text(50),
                'cd_trangthai'=> 2
            ]);
            $now = $updated->copy();
        }
        DB::table('chude')->insert($list);
        
        
        
        
        
        
        
        
        
        
        
//        $list = [];
//        $type = ["Hoa cưới", "Sinh nhật", "Chúc mừng", "Chia Buồn", "Lễ Tình Nhân", "20 tháng 11", "8 tháng 3"];
//        sort($type);
//        for($i= 1; $i <= count($type); $i++){
//            array_push($list, [
//               'cd_ma' => $i,
//               'cd_ten' => $type[$i-1],
//            ]);
//        }
//            DB::table('chude')->insert($list);
    }
}
