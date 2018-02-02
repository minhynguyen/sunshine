<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->smallIncrements('ncc_ma');
            $table->string('ncc_ten', 191);
            $table->string('ncc_daidien', 100)  ;
            $table->string('ncc_diachi', 250);
            $table->string('ncc_dienthoai', 11);
            $table->string('ncc_email', 100);
            $table->timestamp('ncc_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ncc_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('ncc_trangthai')->default('2');
            $table->unsignedSmallInteger('xx_ma');
            $table->foreign('xx_ma')->references('xx_ma')->on('xuatxu')->onDelete('cascade')->onUpdate('cascade');
            $table->unique('ncc_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
