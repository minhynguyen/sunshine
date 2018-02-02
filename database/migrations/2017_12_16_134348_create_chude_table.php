<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude', function (Blueprint $table) {
            $table->tinyIncrements('cd_ma');
            $table->string('cd_ten', 50);
            $table->timestamp('cd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('cd_trangthai')->default('2');
            $table->unique('cd_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude');
    }
}
