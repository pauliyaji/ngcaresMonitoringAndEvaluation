<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivelihoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livelihoods', function (Blueprint $table) {
            $table->id();
            $table->string('liv_enrolled_f');
            $table->string('liv_enrolled_m');
            $table->string('liv_enrolled_total');
            $table->string('liv_trained_f');
            $table->string('liv_trained_m');
            $table->string('liv_trained_total');
            $table->string('liv_total_amt_trans_psp');
            $table->string('liv_bene_trans_f');
            $table->string('liv_bene_trans_m');
            $table->string('liv_bene_trans_total');
            $table->string('liv_supported_f');
            $table->string('liv_supported_m');
            $table->string('liv_supported_total');
            $table->string('liv_total_amt_paid');
            $table->String('state_id');
            $table->String('user_id');
            $table->string('quarter_id');
            $table->string('year');
            $table->string('sccuID');
            $table->string('form_title');
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
        Schema::dropIfExists('livelihoods');
    }
}
