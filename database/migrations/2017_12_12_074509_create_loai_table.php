<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->tinyIncrements('l_ma');
            $table->string('l_ten', 50);
            $table->timestamp('l_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('l_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('l_trangthai')->default('2');
            $table->unique('l_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
