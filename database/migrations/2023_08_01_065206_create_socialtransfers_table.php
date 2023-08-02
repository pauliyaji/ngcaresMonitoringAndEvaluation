<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialtransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialtransfers', function (Blueprint $table) {
            $table->id();
            $table->string('benenrolled_aged_f');
            $table->string('benenrolled_aged_m');
            $table->string('benenrolled_chron_f');
            $table->string('benenrolled_chron_m');
            $table->string('benenrolled_urb_f');
            $table->string('benenrolled_urb_m');
            $table->string('benenrolled_psn_f');
            $table->string('benenrolled_psn_m');
            $table->string('benenrolled_widows');
            $table->string('benenrolled_total');
            $table->string('total_trans_psp');
            $table->string('ben_trans_f');
            $table->string('ben_trans_m');
            $table->string('ben_trans_total');
            $table->string('ben_trans_aged_f');
            $table->string('ben_trans_aged_m');
            $table->string('ben_trans_chron_f');
            $table->string('ben_trans_chron_m');
            $table->string('ben_trans_urb_f');
            $table->string('ben_trans_urb_m');
            $table->string('ben_trans_psn_f');
            $table->string('ben_trans_psn_m');
            $table->string('ben_trans_widows');
            $table->string('total_ben_paid_f');
            $table->string('total_ben_paid_m');
            $table->string('total_ben_paid');
            $table->string('total_amt_paid');
            $table->string('total_amt_paid_per_cycle');
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
        Schema::dropIfExists('socialtransfers');
    }
}
