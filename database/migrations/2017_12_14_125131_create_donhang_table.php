<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('dh_ma');
            $table->unsignedBigInteger('kh_ma');
            $table->dateTime('dh_thoigiandathang')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('dh_thoigiannhanhang');
            $table->string('dh_nguoinhan', 100);
            $table->string('dh_diachi', 191);
            $table->string('dh_dienthoai', 11);
            $table->string('dh_nguoigui', 100);
            $table->text('dh_loichuc');
            $table->unsignedTinyInteger('dh_dathanhtoan')->default('0');
            $table->unsignedTinyInteger('nv_xuly')->default('1');
            $table->dateTime('dh_ngayxuly')->nullable();
            $table->unsignedTinyInteger('nv_giaohang')->default('1');
            $table->dateTime('dh_ngaylapphieugiao')->nullable();
            $table->dateTime('dh_ngaygiaohang')->nullable();
            $table->timestamp('dh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('dh_trangthai')->default('1');
            $table->unsignedTinyInteger('vc_ma');
            $table->unsignedTinyInteger('tt_ma');
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_xuly')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_giaohang')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vc_ma')->references('vc_ma')->on('vanchuyen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
