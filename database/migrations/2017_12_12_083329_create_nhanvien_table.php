<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->tinyIncrements('nv_ma');
            $table->string('nv_taikhoan', 50);
            $table->string('nv_matkhau', 32);
            $table->string('nv_hoten', 100);
            $table->unsignedTinyInteger('nv_gioitinh')->default('1');
            $table->string('nv_email', 100);
            $table->dateTime('nv_ngaysinh')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nv_diachi', 191);
            $table->string('nv_dienthoai', 11);
            $table->timestamp('nv_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('nv_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('nv_trangthai')->default('2');
            $table->unsignedTinyInteger('q_ma');
            $table->unique(['nv_taikhoan', 'nv_email', 'nv_dienthoai']);
            $table->foreign('q_ma')->references('q_ma')->on('quyen')->onDelete('cascade')->onUpdate('cascade');
            
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
