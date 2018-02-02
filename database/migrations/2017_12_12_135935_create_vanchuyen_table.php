<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->tinyIncrements('vc_ma');
            $table->string('vc_ten', 191);
            $table->integer('vc_chiphi')->default('0');
            $table->text('vc_diengiai');
            $table->timestamp('vc_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('vc_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kh_trangthai')->default('2');
            $table->unique('vc_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
