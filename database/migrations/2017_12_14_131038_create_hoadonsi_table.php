<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonsi', function (Blueprint $table) {
            $table->bigIncrements('hds_ma');
            $table->string('hds_nguoimuahang', 100);
            $table->string('hds_tendonvi', 191);
            $table->string('hds_diachi', 191);
            $table->string('hds_masothue', 14);
            $table->string('hds_sotaikhoan', 20)->nullable();
            $table->unsignedTinyInteger('nv_laphoadon');
            $table->dateTime('hds_ngayxuathoadon')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('hds_thutruong')->default('1');
            $table->timestamp('hds_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hds_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('hds_trangthai')->default('1');
            $table->unsignedBigInteger('dh_ma')->default('1');
            $table->unsignedTinyInteger('tt_ma');
            $table->foreign('dh_ma')->references('dh_ma')->on('donhang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_laphoadon')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hds_thutruong')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonsi');
    }
}
