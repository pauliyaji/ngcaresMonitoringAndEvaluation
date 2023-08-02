<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLipwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lipws', function (Blueprint $table) {
            $table->id();
            $table->string('lipw_enrolled_f');
            $table->string('lipw_enrolled_m');
            $table->string('lipw_enrolled_total');
            $table->string('lipw_deployed_f');
            $table->string('lipw_deployed_m');
            $table->string('lipw_deployed_total');
            $table->string('lipw_total_amt_trans_psp');
            $table->string('lipw_bene_trans_psp_f');
            $table->string('lipw_bene_trans_psp_m');
            $table->string('lipw_bene_trans_psp_total');
            $table->string('lipw_bene_paid_f');
            $table->string('lipw_bene_paid_m');
            $table->string('lipw_bene_paid_total');
            $table->string('lipw_total_amt_paid');
            $table->string('lipw_total_amt_paid_per_cycle');
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
        Schema::dropIfExists('lipws');
    }
}
