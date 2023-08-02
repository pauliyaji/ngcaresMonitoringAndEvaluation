<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicservices', function (Blueprint $table) {
            $table->id();
            $table->integer('total_ben_comm');
            $table->integer('estm_population');
            $table->integer('cds_forfunding');
            $table->integer('cdp_mps_edu');
            $table->integer('cdp_mps_health');
            $table->integer('cdp_mps_nut');
            $table->integer('cdp_mps_water');
            $table->integer('cdp_mps_total');
            $table->integer('mp_edu');
            $table->integer('mp_health');
            $table->integer('mp_nut');
            $table->integer('mp_water');
            $table->integer('mp_total');
            $table->integer('comp_mp_edu');
            $table->integer('comp_mp_health');
            $table->integer('comp_mp_nut');
            $table->integer('comp_mp_water');
            $table->integer('comp_mp_total');
            $table->integer('mp_vol_land_edu');
            $table->integer('mp_vol_land_health');
            $table->integer('mp_vol_land_nut');
            $table->integer('mp_vol_land_water');
            $table->integer('mp_vol_land_total');
            $table->integer('mp_cess_edu');
            $table->integer('mp_cess_health');
            $table->integer('mp_cess_nut');
            $table->integer('mp_cess_water');
            $table->integer('mp_cess_total');
            $table->integer('mp_essm_edu');
            $table->integer('mp_essm_health');
            $table->integer('mp_essm_nut');
            $table->integer('mp_essm_water');
            $table->integer('mp_essm_total');
            $table->integer('mp_comp_male');
            $table->integer('mp_comp_female');
            $table->integer('mp_comp_total');
            $table->integer('total_ben_grp_mp');
            $table->integer('estm_popu_grp');
            $table->integer('approved_grdp_total');
            $table->integer('gmps_in_grdp_edu');
            $table->integer('gmps_in_grdp_health');
            $table->integer('gmps_in_grdp_nut');
            $table->integer('gmps_in_grdp_water');
            $table->integer('gmps_in_grdp_total');
            $table->integer('comp_gmp_edu');
            $table->integer('comp_gmp_health');
            $table->integer('comp_gmp_nut');
            $table->integer('comp_gmp_water');
            $table->integer('comp_gmp_total');
            $table->integer('comp_func_gmp_edu');
            $table->integer('comp_func_gmp_health');
            $table->integer('comp_func_gmp_nut');
            $table->integer('comp_func_gmp_water');
            $table->integer('comp_func_gmp_total');
            $table->integer('total_ben_grp_gmp');
            $table->integer('est_total_popu_of_ben');
            $table->integer('gdvld_edu');
            $table->integer('gdvld_health');
            $table->integer('gdvld_nut');
            $table->integer('gdvld_water');
            $table->integer('gdvld_total');
            $table->integer('dbcomp_func_f');
            $table->integer('dbcomp_func_m');
            $table->integer('dbcomp_func_total');
            $table->integer('total_dbfunc_mp_gmp_m');
            $table->integer('total_dbfunc_mp_gmp_f');
            $table->integer('total_dbfunc_mp_gmp');
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
        Schema::dropIfExists('basicservices');
    }
}
