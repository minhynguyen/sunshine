<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonle', function (Blueprint $table) {
            $table->bigIncrements('hdl_ma');
            $table->string('hdl_nguoimuahang', 100);
            $table->string('hdl_dienthoai', 11);
            $table->string('hdl_diachi', 191);
            $table->unsignedTinyInteger('nv_laphoadon');
            $table->dateTime('hdl_ngayxuathoadon')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('dh_ma')->default('1');
            $table->foreign('dh_ma')->references('dh_ma')->on('donhang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_laphoadon')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonle');
    }
}
