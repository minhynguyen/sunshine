<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten', 191);
            $table->unsignedInteger('sp_giagoc')->default('0');
            $table->unsignedInteger('sp_giaban')->default('0');
            $table->string('sp_hinh', 191);
            $table->text('sp_thongtin');
            $table->string('sp_danhgia', 50);
            $table->timestamp('sp_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sp_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('sp_trangthai')->default('2');
            $table->unsignedTinyInteger('l_ma');
            $table->foreign('l_ma')->references('l_ma')->on('loai')->onDelete('cascade')->onUpdate('cascade');
            $table->unique('sp_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
