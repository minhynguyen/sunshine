<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->bigIncrements('pn_ma');
            $table->string('pn_nguoigiao', 100);
            $table->string('pn_sohoadon', 15);
            $table->dateTime('pn_ngayxuathoadon')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('pn_ghichu')->nullable();
            $table->unsignedTinyInteger('nv_nguoilapphieu');
            $table->dateTime('pn_ngaylapphieu')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('nv_ketoan')->default('1');
            $table->dateTime('pn_ngayxacnhan')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->unsignedTinyInteger('nv_thukho')->default('1');
            $table->dateTime('pn_ngaynhapkho')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->timestamp('pn_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('pn_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kmsp_trangthai')->default('2');
            $table->unsignedSmallInteger('ncc_ma');
            $table->foreign('nv_nguoilapphieu')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_ketoan')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_thukho')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ncc_ma')->references('ncc_ma')->on('nhacungcap')->onDelete('cascade')->onUpdate('cascade');
            $table->unique('pn_sohoadon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
