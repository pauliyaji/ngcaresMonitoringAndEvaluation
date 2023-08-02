<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dp_reports', function (Blueprint $table) {
            $table->id();
            //social transfer starts here
            $table->string('tot_bene_mined_f');
            $table->string('tot_bene_mined_m');
            $table->string('tot_bene_mined');

            $table->string('tot_bene_mined_dis_aged');
            $table->string('tot_bene_mined_dis_chro');
            $table->string('tot_bene_mined_dis_urban');
            $table->string('tot_bene_mined_dis_spn');
            $table->string('tot_bene_mined_dis_others')->nullable();
            $table->string('tot_bene_validated_f');
            $table->string('tot_bene_validated_m');
            $table->string('tot_bene_validated');

            $table->string('tot_bene_mined_dis_aged_f');
            $table->string('tot_bene_mined_dis_aged_m');
            $table->string('tot_bene_mined_dis_chro_f');
            $table->string('tot_bene_mined_dis_chro_m');
            $table->string('tot_bene_mined_dis_urban_f');
            $table->string('tot_bene_mined_dis_urban_m');
            $table->string('tot_bene_mined_dis_spn_f');
            $table->string('tot_bene_mined_dis_spn_m');
            $table->string('amt_trans_psp');

            $table->string('tot_bene_trans_psp_f');
            $table->string('tot_bene_trans_psp_m');
            $table->string('tot_bene_trans_psp');

            $table->string('tot_bene_trans_psp_aged_f');
            $table->string('tot_bene_trans_psp_aged_m');
            $table->string('tot_bene_trans_psp_chro_f');
            $table->string('tot_bene_trans_psp_chro_m');
            $table->string('tot_bene_trans_psp_urban_f');
            $table->string('tot_bene_trans_psp_urban_m');
            $table->string('tot_bene_trans_psp_spn_f');
            $table->string('tot_bene_trans_psp_spn_m');
            $table->string('tot_bene_trans_psp_others')->nullable();
            $table->string('tot_bene_trans_psp_total');

            $table->string('tot_bene_paid');
            $table->string('tot_bene_paid_f');
            $table->string('tot_bene_paid_m');
            //LIPWs ends here
            $table->string('lipw_tot_bene_mined_f');
            $table->string('lipw_tot_bene_mined_m');
            $table->string('lipw_tot_bene_mined');

            $table->string('lipw_tot_bene_mined_validated_f');
            $table->string('lipw_tot_bene_mined_validated_m');
            $table->string('lipw_tot_bene_mined_validated');

            $table->string('lipw_tot_enrolled_f');
            $table->string('lipw_tot_enrolled_m');
            $table->string('lipw_tot_enrolled');

            $table->string('lipw_tot_deployed_f');
            $table->string('lipw_tot_deployed_m');
            $table->string('lipw_tot_deployed');

            $table->string('lipw_no_working_days');
            $table->string('lipw_tot_amt_trans_psp');

            $table->string('lipw_tot_bene_trans_f');
            $table->string('lipw_tot_bene_trans_m');
            $table->string('lipw_tot_bene_trans');

            $table->string('lipw_tot_bene_paid_f');
            $table->string('lipw_tot_bene_paid_m');
            $table->string('lipw_tot_bene_paid');

            //lipws ends here

            $table->string('livs_tot_bene_mined_f');
            $table->string('livs_tot_bene_mined_m');
            $table->string('livs_tot_bene_mined');

            $table->string('livs_tot_bene_validated_f');
            $table->string('livs_tot_bene_validated_m');
            $table->string('livs_tot_bene_validated');

            $table->string('livs_tot_bene_trained_f');
            $table->string('livs_tot_bene_trained_m');
            $table->string('livs_tot_bene_trained');

            $table->string('livs_tot_bene_grad_f');
            $table->string('livs_tot_bene_grad_m');
            $table->string('livs_tot_bene_grad');

            $table->string('livs_tot_amt_psp');
            $table->string('livs_tot_bene_trans_psp_f');
            $table->string('livs_tot_bene_trans_psp_m');

            $table->string('livs_tot_bene_supported');
            $table->string('livs_tot_bene_supported_f');
            $table->string('livs_tot_bene_supported_m');

            $table->string('livs_tot_amt_paid_bene');

            //Livelihoods ends here

            $table->string('bs_tot_com_grp_sen_pov_lga');
            $table->string('bs_tot_eoi_com_grp_sen_pov');
            $table->string('bs_tot_cdp');
            $table->string('bs_no_cpmc_trained');
            $table->string('bs_no_com_with_func_cdps');
            $table->string('bs_tot_app_cdps_for_funding');
            $table->string('bs_tot_cdp_com_edu');
            $table->string('bs_tot_cdp_com_health');
            $table->string('bs_tot_cdp_com_nut');
            $table->string('bs_tot_cdp_com_water');
            $table->string('bs_tot_cdp_com');

            $table->string('bs_tot_cdp_fun_edu');
            $table->string('bs_tot_cdp_fun_health');
            $table->string('bs_tot_cdp_fun_nut');
            $table->string('bs_tot_cdp_fun_water');
            $table->string('bs_tot_cdp_fun');

            $table->string('bs_tot_mps_com_edu');
            $table->string('bs_tot_mps_com_health');
            $table->string('bs_tot_mps_com_nut');
            $table->string('bs_tot_mps_com_water');
            $table->string('bs_tot_mps_com');

            $table->string('bs_tot_dir_bene_com_fun_mps_f');
            $table->string('bs_tot_dir_bene_com_fun_mps_m');
            $table->string('bs_tot_dir_bene_com_fun_mps');

            $table->string('bs_tot_grdps_sub_grp');
            $table->string('bs_tot_gpmc_trained');
            $table->string('bs_tot_no_comm_com_fun_grdps');
            $table->string('bs_tot_app_grdp_funding');

            $table->string('bs_tot_grdps_fun_edu');
            $table->string('bs_tot_grdps_fun_health');
            $table->string('bs_tot_grdps_fun_nut');
            $table->string('bs_tot_grdps_fun_water');
            $table->string('bs_tot_grdps_fun');

            $table->string('bs_tot_gmps_in_app_grdps_edu');
            $table->string('bs_tot_gmps_in_app_grdps_health');
            $table->string('bs_tot_gmps_in_app_grdps_nut');
            $table->string('bs_tot_gmps_in_app_grdps_water');
            $table->string('bs_tot_gmps_in_app_grdps');

            $table->string('bs_tot_gmps_com_with_env_edu');
            $table->string('bs_tot_gmps_com_with_env_health');
            $table->string('bs_tot_gmps_com_with_env_nut');
            $table->string('bs_tot_gmps_com_with_env_water');
            $table->string('bs_tot_gmps_com_with_env');

            $table->string('bs_dir_bene_com_fun_gmps_f');
            $table->string('bs_dir_bene_com_fun_gmps_m');
            $table->string('bs_dir_bene_com_fun_gmps');
//////Basic services ends here
/// Result Area 2 starts here


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
        Schema::dropIfExists('dp_reports');
    }
}
