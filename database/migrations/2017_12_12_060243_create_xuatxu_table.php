<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->smallIncrements('xx_ma');
            $table->string('xx_ten', 100);
            $table->timestamp('xx_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('xx_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('xx_trangthai')->default('2');
            $table->unique('xx_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
