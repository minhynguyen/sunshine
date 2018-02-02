<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->tinyIncrements('tt_ma');
            $table->string('tt_ten', 191);
            $table->text('tt_diengiai', 191);
            $table->timestamp('tt_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tt_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kh_trangthai')->default('2');
            $table->unique('tt_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
