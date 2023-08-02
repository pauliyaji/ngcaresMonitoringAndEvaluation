<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgricinputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricinputs', function (Blueprint $table) {
            $table->id();
            $table->string('uAi_gender_f');
            $table->string('uAi_gender_m');
            $table->string('uAi_gender_total');
            $table->string('uAi_vc_crops');
            $table->string('uAi_vc_livest');
            $table->string('uAi_vc_fish');
            $table->string('uAi_vc_total');
            $table->string('uCs_ai_total');
            $table->string('uAi_ss_f');
            $table->string('uAi_ss_m');
            $table->string('uAi_ss_total');
            $table->string('uAi_ss_crops');
            $table->string('uAi_ss_livest');
            $table->string('uAi_ss_fish');
            $table->string('total_uAi_ss');
            $table->string('total_cs_uAi');
            $table->string('recv_uAss_f');
            $table->string('recv_uAss_m');
            $table->string('recv_uAss_total');
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
        Schema::dropIfExists('agricinputs');
    }
}
