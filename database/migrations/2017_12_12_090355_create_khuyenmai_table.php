<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->tinyIncrements('km_ma');
            $table->string('km_ten', 191);
            $table->text('km_noidung');
            $table->dateTime('km_batdau');
            $table->dateTime('km_ketthuc')->defult('NULL')->nullable();
            $table->string('km_giatri', 50)->default('100;100');
            $table->unsignedTinyInteger('nv_nguoilap');
            $table->dateTime('km_ngaylap')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('nv_kynhay')->default('1');
            $table->dateTime('km_ngaykynhay')->default(DB::raw('NULL'))->nullable();
            $table->unsignedTinyInteger('nv_kyduyet')->default('1');
            $table->dateTime('km_ngayduyet')->default(DB::raw('NULL'))->nullable();
            $table->timestamp('km_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('km_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('km_trangthai')->default('2');
            
            $table->foreign('nv_nguoilap')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_kynhay')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_kyduyet')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
