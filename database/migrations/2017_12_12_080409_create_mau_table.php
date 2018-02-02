<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table->tinyIncrements('m_ma');
            $table->string('m_ten', 50);
            $table->timestamp('m_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('m_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('m_trangthai')->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau');
    }
}
