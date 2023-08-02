<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgricinfrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricinfras', function (Blueprint $table) {
            $table->id();
            $table->string('improvedAi_f');
            $table->string('improvedAi_m');
            $table->string('improvedAi_total');
            $table->string('totalInfra_completed');
            $table->string('totalInfra_paid');
            $table->string('accessAi_f');
            $table->string('accessAi_m');
            $table->string('accessAi_total');
            $table->integer('state_id');
            $table->integer('user_id');
            $table->integer('quarter_id');
            $table->integer('year');
            $table->integer('sccuID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agricinfras');
    }
}
