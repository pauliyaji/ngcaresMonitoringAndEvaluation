@extends('layouts/layout')

@section('content')
    <style>
        .profile-content-right{
            border-top: 0px;
            border-left: 1px solid #0e87f3;
        }
        .nav-tabs {
            border-bottom: 1px solid #086ddf;
        }
        .nav-link {
            color: blue;
        }

    </style>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">RESULT AREA 1
                </h6>
            </div>
            <div class="card-body">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#socialtransfer" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Social Transfer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#lipws" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">LIPWs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#livelihoods" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Livelihoods</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#basicservices" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Basic Services</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
        <!-- Social Transfer  -->
                    <div class="tab-pane fade show active" id="socialtransfer" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-primary p-4">
                                <div class="row">
                                    <div class="card-header col-md-4 col-xs-12" style="background-color: #506dee;">
                                        <label for="month" style="color: white;"
                                        >Select Month<span style="color: rgb(253, 237, 10);"
                                            >(*)</span
                                            ></label>
                                        <select class="form-control"
                                                name="month" required>
                                            <option value="">Select Month</option>
                                            @foreach($months as $month)
                                                <option value="{{ $month->id }}"
                                                    {{$month->month }}>{{ $month->month }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('month'))
                                            <span class="text-danger text-left">{{ $errors->first('month') }}</span>
                                        @endif
                                    </div>
                                    <div class="card-header col-md-4 col-xs-12" style="background-color: #506dee;">
                                        <label for="states" style="color: white;"
                                        >Select Year<span style="color: rgb(253, 237, 10);"
                                            >(*)</span
                                            ></label>
                                        <select class="form-control"
                                                name="year" required>
                                            <option value="">Select Year</option>
                                            @foreach($years as $year)
                                                <option value="{{ $year->id }}"
                                                    {{$year->year}}>{{ $year->year }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('year'))
                                            <span class="text-danger text-left">{{ $errors->first('year') }}</span>
                                        @endif
                                    </div>
                                    <div class="card-header col-md-4 col-xs-12" style="background-color: #506dee;">
                                        <label for="quarters" style="color: white;"
                                        >Select Reporting Quarter<span style="color: rgb(253, 237, 10);"
                                            >(*)</span
                                            ></label>
                                        <select class="form-control"
                                                name="quarter" required>
                                            <option value="">Select Reporting Quarter</option>
                                            @foreach($quarters as $quarter)
                                                <option value="{{ $quarter->id }}"
                                                    {{$quarter->date}}>{{ $quarter->quarter }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('quarter'))
                                            <span class="text-danger text-left">{{ $errors->first('quarter') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                    <!-- SOCIAL TRANSFER FORM STARTS HERE  -->
                            <div class="row">
                                <span class="card-header" style="color: white; background-color: #506dee;">
                                  1.1.1 Total Number of Beneficiaries enrolled (disaggregated by
                                  vulnerability profile (Aged, Chronically ill, Urban Poor and people
                                  with special needs)
                                </span>
                                <div class="col-md-3">
                                    <label>Aged Female</label>
                                    <input type="text" name="benenrolled_aged_f" id="benenrolled_aged_f" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Aged Male</label>
                                    <input type="text" name="benenrolled_aged_m" id="benenrolled_aged_m" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Chronically ill Female</label>
                                    <input type="text" name="benenrolled_chron_f" id="benenrolled_chron_f" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Chronically ill Male</label>
                                    <input type="text" name="benenrolled_chron_m" id="benenrolled_chron_m" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Urban Poor Female</label>
                                    <input type="text" name="benenrolled_urb_f" id="benenrolled_urb_f" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Urban Poor Male</label>
                                    <input type="text" name="benenrolled_urb_m" id="benenrolled_urb_m" class="form-control" onkeyup="test2a()" /> </div>
                                <div class="col-md-3">
                                    <label>Special needs Female</label>
                                    <input type="text" name="benenrolled_psn_f" id="benenrolled_psn_f" class="form-control" onkeyup="test2()" /> </div>
                                <div class="col-md-3">
                                    <label>Special needs Male</label>
                                    <input type="text" name="benenrolled_psn_m" id="benenrolled_psn_m" class="form-control" onblur="test2()" /> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Widows</label>
                                    <input type="text" name="benenrolled_widows" id="benenrolled_widows" class="form-control" onblur="test2()" />
                                </div>
                                <div class="col-md-3">
                                    <label>Total Beneficiaries Enrolled</label>
                                    <input type="text" name="benenrolled_total" id="benenrolled_total" class="form-control" onblur="test2()" readonly/>
                                </div>
                            </div>
                                <hr>
                            <div class="row">
                                <span class="card-header col-md-6" style="color: white; background-color: #506dee;">1.1.2 Total Amount transferred to PSP (NGN)</span>
                               <div class="col-md-6 col-xs-12">
                                  <input type="text" name="total_trans_psp" id="total_trans_psp" class="form-control" />
                               </div>
                            </div>
                            <hr>
                            <div class="row">
                                <span class="col-md-12 col-xs-12 card-header" style="color: white; background-color: #506dee;">1.1.3 Total No. in the List of Beneficiaries transferred to PSP for payment</span>
                                <div class="col-md-4">
                                    <label>Female</label>
                                    <input type="text" name="ben_trans_f" id="ben_trans_f" class="form-control" onkeyup="reSum5()" />
                                </div>
                                <div class="col-md-4">
                                    <label>Male</label>
                                    <input type="text" name="ben_trans_m" id="ben_trans_m" onkeyup="reSum5()" class="form-control" />
                                </div>
                                <div class="col-md-4">
                                    <label>Total</label>
                                    <input type="number" name="ben_trans_total" id="ben_trans_total" class="form-control" readonly />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Aged Female</label>
                                    <input type="text" name="ben_trans_aged_f" id="ben_trans_aged_f" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3">
                                    <label>Aged Male</label>
                                    <input type="text" name="ben_trans_aged_m" id="ben_trans_aged_m" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3">
                                    <label>Chronically ill Female</label>
                                    <input type="text" name="ben_trans_chron_f" id="ben_trans_chron_f" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3">
                                    <label>Chronically ill Male</label>
                                    <input type="text" name="ben_trans_chron_m" id="ben_trans_chron_m" class="form-control" onkeyup="test3a()" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="margin-top: 23px;">
                                    <label>Urban Poor Female</label>
                                    <input type="text" name="ben_trans_urb_f" id="ben_trans_urb_f" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3" style="margin-top: 23px;">
                                    <label>Urban Poor Male</label>
                                    <input type="text" name="ben_trans_urb_m" id="ben_trans_urb_m" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3">
                                    <label>People with Special needs Female</label>
                                    <input type="text" name="ben_trans_psn_f" id="ben_trans_psn_f" class="form-control" onkeyup="test3a()" />
                                </div>
                                <div class="col-md-3">
                                    <label>People with Special needs Male</label>
                                    <input type="text" name="ben_trans_psn_m" id="ben_trans_psn_m" class="form-control" onblur="test3()" />
                                </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>People with Special needs (Widows)</label>
                                        <input type="text" name="ben_trans_widows" id="ben_trans_widows" class="form-control" onblur="test3()" />
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                        <div class="col-md-3" style="color: white; background-color: #506dee; padding: 10px;">1.1.4 Total Number of Beneficiaries Paid</div>
                                        <div class="col-md-3">
                                            <label>Female</label>
                                            <input type="text" class="form-control" name="total_ben_paid_f" id="total_ben_paid_f" onkeyup="reSum2();" />
                                        </div>
                                        <div class="col-md-3">
                                            <label>Male</label>
                                            <input type="text" class="form-control" name="total_ben_paid_m" id="total_ben_paid_m" onkeyup="reSum2();" />
                                        </div>
                                        <div class="col-md-3">
                                            <label>Total</label>
                                            <input type="number" name="total_ben_paid" id="total_ben_paid" readonly class="form-control" />
                                        </div>
                                    </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3" style="color: white; background-color: #506dee; padding: 10px;">1.1.5 Total Amount Paid to Beneficiaries</div>
                                    <div class="col-md-3">
                                        <label></label>
                                        <input type="text" class="form-control" name="total_amt_paid" id="total_amt_paid" onkeyup="reSum2();" />
                                    </div>
                                    <div class="col-md-3" style="color: white; background-color: #506dee; padding: 10px;">1.1.6 Total Amount Paid Per Cycle</div>

                                    <div class="col-md-3">
                                        <label></label>
                                        <input type="number" name="total_amt_paid_per_cycle" id="total_amt_paid_per_cycle" class="form-control" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row float-right">
                                    <button type="submit" class="btn btn-info btn-lg">Save and Continue</button>
                                </div>
                     <!-- SOCIAL TRANSFER FORM ENDS HERE  -->

                            </div>

                        </form>

                    </div>

        <!-- LIPWs  -->
                    <div class="tab-pane fade" id="lipws" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-primary p-4">

                                <div class="row">
                                 <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.2.1 No. Enrolled from agreed Social Register into LIPW activities on Social Services and Works</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="lipw_enrolled_f" id="lipw_enrolled_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="lipw_enrolled_m" id="lipw_enrolled_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="lipw_enrolled_f" id="lipw_enrolled_f" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.2.2 No. Deployed into LIPW activities on Social Services and Works</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="lipw_deployed_f" id="lipw_deployed_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="lipw_deployed_m" id="lipw_deployed_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="lipw_deployed_total" id="lipw_deployed_total" readonly />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                <span class="card-header col-md-6" style="color: white; background-color: #506dee;">1.2.3 Total Amount transferred to PSP (NGN) </span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="lipw_total_amt_trans_psp" id="lipw_total_amt_trans_psp" onkeyup="sum()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.2.4 Total No. in the List of Beneficiaries transferred to PSP for Payment</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="lipw_bene_trans_psp_f" id="lipw_bene_trans_psp_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="lipw_bene_trans_psp_m" id="lipw_bene_trans_psp_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="lipw_bene_trans_psp_total" id="lipw_bene_trans_psp_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.2.5 Total Number of Beneficiaries Paid </span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="lipw_bene_paid_f" id="lipw_bene_paid_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="lipw_bene_paid_m" id="lipw_bene_paid_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="lipw_bene_paid_total" id="lipw_bene_paid_total" readonly />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-3" style="color: white; background-color: #506dee; padding: 10px;">1.2.6 Total Amount Paid to Beneficiaries</div>
                                    <div class="col-md-3">
                                        <label></label>
                                        <input type="text" class="form-control" name="lipw_total_amt_paid" id="lipw_total_amt_paid" onkeyup="reSum2();" />
                                    </div>
                                    <div class="col-md-3" style="color: white; background-color: #506dee; padding: 10px;">1.2.7 Total Amount Paid Per Cycle</div>

                                    <div class="col-md-3">
                                        <label></label>
                                        <input type="number" name="lipw_total_amt_paid_per_cycle" id="lipw_total_amt_paid_per_cycle" class="form-control" />
                                    </div>
                                </div>
                                <br />
                                <div class="row float-right">
                                    <button type="submit" class="btn btn-info btn-lg">Save and Continue</button>
                                </div>
                                <!-- LIPWs FORM ENDS HERE  -->

                            </div>

                        </form>
                    </div>

        <!-- Livelihoods   -->
                    <div class="tab-pane fade" id="livelihoods" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-primary p-4">

                                <div class="row">
                                    <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.3.1 Total No. of Beneficiaries Enrolled from agreed Social Register</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="liv_enrolled_f" id="liv_enrolled_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="liv_enrolled_m" id="liv_enrolled_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="liv_enrolled_total" id="liv_enrolled_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.3.2 Total No. of Beneficiaries Trained on Livelihood</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="liv_trained_f" id="liv_trained_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="liv_trained_m" id="liv_trained_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="liv_trained_total" id="liv_trained_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #506dee;">1.3.3 Total Amount transferred to PSP (NGN) </span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="liv_total_amt_trans_psp" id="liv_total_amt_trans_psp" onkeyup="sum()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.3.4 Total No. in the List of Beneficiaries Transferred to PSP for Payment</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="liv_bene_trans_f" id="liv_bene_trans_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="liv_bene_trans_m" id="liv_bene_trans_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="liv_bene_trans_total" id="liv_bene_trans_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-footer" style="color: white; background-color: #506dee;">1.3.5 Total No. of Beneficiaries Supported with Livelihood Grants</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="liv_supported_f" id="liv_supported_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="liv_supported_m" id="liv_supported_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="liv_supported_total" id="liv_supported_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #506dee;">1.3.6 Total Amount Paid to Beneficiaries </span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="liv_total_amt_paid" id="liv_total_amt_paid" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row float-right">
                                    <button type="submit" class="btn btn-info btn-lg">Save and Continue</button>
                                </div>
                                <!-- LIPWs FORM ENDS HERE  -->

                            </div>

                        </form>
                    </div>
        <!-- Basic services   -->
                    <div class="tab-pane fade" id="basicservices" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-primary p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>1.4.1 Total Number of Benefiting Communities </label><br><br>
                                        <input type="text" class="form-control" name="total_ben_comm" id="total_ben_comm" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>1.4.2 Estimated Population of the Communities</label><br><br>
                                        <input type="text" name="estm_population" id="estm_population" onkeyup="reSum5()" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>1.4.3 Total No. of CDPs Approved for funding by SA</label>
                                        <input type="number" name="cds_forfunding" id="cds_forfunding" class="form-control" readonly />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.4 Total no. of MPs in Approved CDPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="cdp_mps_edu" id="cdp_mps_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="cdp_mps_health" id="cdp_mps_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="cdp_mps_nut" id="cdp_mps_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="cdp_mps_water" id="cdp_mps_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="cdp_mps_total" id="cdp_mps_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.5 Total no. of Completed MPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="mp_edu" id="mp_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="mp_health" id="mp_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="mp_nut" id="mp_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="mp_water" id="mp_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="mp_total" id="mp_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.6 Total no. of Completed & Functional MPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="comp_mp_edu" id="comp_mp_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="comp_mp_health" id="comp_mp_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="comp_mp_nut" id="comp_mp_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="comp_mp_water" id="comp_mp_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="comp_mp_total" id="comp_mp_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.7 No. of MPs with documented Voluntary Land Donation Protocols by Sectors</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="mp_vol_land_edu" id="mp_vol_land_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="mp_vol_land_health" id="mp_vol_land_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="mp_vol_land_nut" id="mp_vol_land_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="mp_vol_land_water" id="mp_vol_land_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="mp_vol_land_total" id="mp_vol_land_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.8 No. of MPs with completed Environmental and Social Safeguards checklist by Sectors</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="mp_cess_edu" id="mp_cess_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="mp_cess_health" id="mp_cess_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="mp_cess_nut" id="mp_cess_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="mp_cess_water" id="mp_cess_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="mp_cess_total" id="mp_cess_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.9 No. of MPs completed in Compliance with Environmental and Social Safeguardss Checklist by Sectors</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="mp_essm_edu" id="mp_essm_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="mp_essm_health" id="mp_essm_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="mp_essm_nut" id="mp_essm_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="mp_essm_water" id="mp_essm_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="mp_essm_total" id="mp_essm_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-header" style="color: white; background-color: #506dee;">1.4.10 No. of Direct Beneficiaries of Completed and Functional MPs by gender</span>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" name="mp_comp_male" id="mp_comp_male" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" name="mp_comp_female" id="mp_comp_female" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" name="mp_comp_total" id="mp_comp_total" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>1.4.11 Total Number of Benefiting Groups </label><br><br>
                                        <input type="text" class="form-control" name="total_ben_grp" id="total_ben_grp" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>1.4.12 Estimated Population of the Groups</label><br><br>
                                        <input type="text" name="estm_popu_grp" id="estm_popu_grp" onkeyup="reSum5()" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>1.4.13 Total No. of GrDPs Approved for funding by SA</label>
                                        <input type="number" name="approved_grdp_total" id="approved_grdp_total" class="form-control" readonly />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.14 Total No. of GMPs in Approved GrDPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="gmps_in_grdp_edu" id="gmps_in_grdp_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="gmps_in_grdp_health" id="gmps_in_grdp_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="gmps_in_grdp_nut" id="gmps_in_grdp_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="gmps_in_grdp_water" id="gmps_in_grdp_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="gmps_in_grdp_total" id="gmps_in_grdp_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.15 Total No. of Completed GMPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="comp_gmp_edu" id="comp_gmp_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="comp_gmp_health" id="comp_gmp_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="comp_gmp_nut" id="comp_gmp_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="comp_gmp_water" id="comp_gmp_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="comp_gmp_total" id="comp_gmp_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.16 Total No. of Completed and Functional GMPs by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="comp_func_gmp_edu" id="comp_func_gmp_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="comp_func_gmp_health" id="comp_func_gmp_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="comp_func_gmp_nut" id="comp_func_gmp_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="comp_func_gmp_water" id="comp_func_gmp_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="comp_func_gmp_total" id="comp_func_gmp_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>1.4.17 Total Number of Benefiting Groups </label><br><br>
                                        <input type="text" class="form-control" name="total_ben_grp" id="total_ben_grp" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-6">
                                        <label>1.4.18 Estimated Population of the Groups</label><br><br>
                                        <input type="text" name="estm_popu_grp" id="estm_popu_grp" onkeyup="reSum5()" class="form-control" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-4 card-header" style="color: white; background-color: #506dee;">1.4.19 No. of GMPs with Documented Voluntary Land Donation Protocols by Sector</span>
                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="gdvld_edu" id="gdvld_edu" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Health</label>
                                        <input type="text" name="gdvld_health" id="gdvld_health" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nutrition</label>
                                        <input type="text" name="gdvld_nut" id="gdvld_nut" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Water & Sanitation</label>
                                        <input type="text" name="gdvld_water" id="gdvld_water" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" name="gdvld_total" id="gdvld_total" class="form-control"  readonly/>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-header" style="color: white; background-color: #506dee;">1.4.20 No. of Direct Beneficiaries of Completed and Functional GMPs</span>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" name="dbcomp_func_m" id="dbcomp_func_m" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" name="dbcomp_func_f" id="dbcomp_func_f" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" name="dbcomp_func_total" id="dbcomp_func_total" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-header" style="color: white; background-color: #506dee;">1.4.21 Total No. of Direct Beneficiaries of Functional MPs and GMPs</span>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" name="total_dbfunc_mp_gmp_m" id="total_dbfunc_mp_gmp_m" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" name="total_dbfunc_mp_gmp_f" id="total_dbfunc_mp_gmp_f" class="form-control" onkeyup="test3a()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" name="total_dbfunc_mp_gmp" id="total_dbfunc_mp_gmp" class="form-control" onkeyup="test3a()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row float-right">
                                    <button type="submit" class="btn btn-info btn-lg">Save and Continue</button>
                                </div>
                                <!-- Basic Services FORM ENDS HERE  -->

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection

@include('layouts/footer')

<script type="text/javascript">
    // function sb() {
    // 	location.reload(true);
    // 	alert("Data successfully submitted.");
    // 	window.location.href = "../";
    // }
    (function($, undefined) {
        "use strict";
        // When ready.
        $(function() {
            var $form = $("#formid");
            var $input = $form.find('input[type="text"]');
            $input.on("keyup", function(event) {
                // When user select text in the document, also abort.
                var selection = window.getSelection().toString();
                if(selection !== "") {
                    return;
                }
                // When the arrow keys are pressed, abort.
                if($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
                    return;
                }
                var $this = $(this);
                // Get the value.
                var input = $this.val();
                var input = input.replace(/[\D\s\._\-]+/g, "");
                input = input ? parseFloat(input, 10) : 0;
                $this.val(function() {
                    return input === 0 ? "0" : input.toLocaleString("en-US");
                });
            });

        });
    })(jQuery);


    function test1() {
        var c = parseFloat(document.getElementById("t1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var d = parseFloat(document.getElementById("a1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var e = parseFloat(document.getElementById("ci1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var f = parseFloat(document.getElementById("up1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var g = parseFloat(document.getElementById("psn1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var cmt1 = document.getElementById("comment1").value.length;
        var set1 = d + e + f + g;
        if(c !== set1 && cmt1 < 1) {
            document.getElementById("t1.1.1").style.backgroundColor = "yellow";
            document.getElementById("comment1").style.backgroundColor = "red";
            document.getElementById("comment1").style.display = "block";
            alert("Error: \nTotal Number of Beneficiaries mined from Agreed Register not equal input reason");
        } else {
            document.getElementById("comment1").value = "";
            document.getElementById("comment1").style.display = "none";
        }
    }

    function test1a() {
        var c = parseFloat(document.getElementById("t1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var d = parseFloat(document.getElementById("a1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var e = parseFloat(document.getElementById("ci1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var f = parseFloat(document.getElementById("up1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var g = parseFloat(document.getElementById("psn1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var cmt1 = document.getElementById("comment1").value.length;
        var x = (document.getElementById("comment1").style.display = "none");
        var set1 = d + e + f + g;
        if(c !== set1 && cmt1 < 1) {
            if(c == set1 && x === "block") {
                document.getElementById("comment1").style.display = "none";
            }
        }
    }

    function test2() {
        var ent = parseFloat(document.getElementById("enF").value.replace(/[^\d\.\-]/g, ""));
        var ent2 = parseFloat(document.getElementById("enM").value.replace(/[^\d\.\-]/g, ""));
        var o = parseFloat(document.getElementById("af1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var p = parseFloat(document.getElementById("am1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var q = parseFloat(document.getElementById("cif1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var r = parseFloat(document.getElementById("cim1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var s = parseFloat(document.getElementById("upf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var t = parseFloat(document.getElementById("upm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var u = parseFloat(document.getElementById("pnf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var v = parseFloat(document.getElementById("pnm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var cmt2 = document.getElementById("comment2").value.length;
        var set2 = o + q + s + u;
        var set3 = p + r + t + v;
        if(ent !== set2 && cmt2 < 1) {
            document.getElementById("enF").style.backgroundColor = "red";
            document.getElementById("comment2").style.backgroundColor = "red";
            document.getElementById("comment2").style.display = "block";
            // alert("Error: \nCheck Total Number of Female Beneficiaries enrolled");
        } else if(ent2 !== set3 && cmt2 < 1) {
            document.getElementById("enM").style.backgroundColor = "red";
            document.getElementById("enF").style.backgroundColor = "white";
            document.getElementById("comment2").style.backgroundColor = "red";
            document.getElementById("comment2").style.display = "block";
            // alert("Error: \nCheck Total Number of Male Beneficiaries enrolled");
        } else {
            document.getElementById("comment2").value = "";
            document.getElementById("comment2").style.display = "none";
            document.getElementById("enM").style.backgroundColor = "white";
        }
    }

    function test2a() {
        var ent = parseFloat(document.getElementById("enT").value.replace(/[^\d\.\-]/g, ""));
        var o = parseFloat(document.getElementById("af1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var p = parseFloat(document.getElementById("am1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var q = parseFloat(document.getElementById("cif1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var r = parseFloat(document.getElementById("cim1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var s = parseFloat(document.getElementById("upf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var t = parseFloat(document.getElementById("upm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var u = parseFloat(document.getElementById("pnf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var v = parseFloat(document.getElementById("pnm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var cmt2 = document.getElementById("comment2").value.length;
        var set2 = o + p + q + r + s + t + u + v;
        var x = (document.getElementById("comment2").style.display = "none");
        if(ent !== set2 && cmt2 < 1) {
            if(ent == set2 && x === "block") {
                document.getElementById("comment2").style.display = "none";
            }
        }
    }

    function test3() {
        var a3 = parseFloat(document.getElementById("t1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a4 = parseFloat(document.getElementById("af1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a5 = parseFloat(document.getElementById("am1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a6 = parseFloat(document.getElementById("cif1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a7 = parseFloat(document.getElementById("cim1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a8 = parseFloat(document.getElementById("upf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a9 = parseFloat(document.getElementById("upm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a10 = parseFloat(document.getElementById("pnf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a11 = parseFloat(document.getElementById("pnm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a12 = parseFloat(document.getElementById("1.1.9").value.replace(/[^\d\.\-]/g, ""));
        var cmt3 = document.getElementById("comment3").value.length;
        var set3 = a4 + a5 + a6 + a7 + a8 + a9 + a10 + a11;
        alert(set3);
        if(set3 > a3 && cmt3 < 1) {
            alert("Disaggregated Total is greater than Beneficiaries ");
            document.getElementById("sbt").disabled = true;
        } else {
            document.getElementById("sbt").disabled = false;
        }
        if(a3 !== set3 && cmt3 < 1) {
            document.getElementById("t1.1.8").style.backgroundColor = "red";
            document.getElementById("comment3").style.backgroundColor = "red";
            document.getElementById("comment3").style.display = "block";
            alert("Error: \nCheck Total Number of Beneficiaries transferred to PSP for payment");
        } else {
            document.getElementById("comment3").value = "";
            document.getElementById("comment3").style.display = "none";
        }
    }

    function test3a() {
        var a3 = parseFloat(document.getElementById("t1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a4 = parseFloat(document.getElementById("af1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a5 = parseFloat(document.getElementById("am1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a6 = parseFloat(document.getElementById("cif1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a7 = parseFloat(document.getElementById("cim1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a8 = parseFloat(document.getElementById("upf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a9 = parseFloat(document.getElementById("upm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a10 = parseFloat(document.getElementById("pnf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a11 = parseFloat(document.getElementById("pnm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a12 = parseFloat(document.getElementById("1.1.9").value.replace(/[^\d\.\-]/g, ""));
        var cmt3 = document.getElementById("comment3").value.length;
        var set3 = a4 + a5 + a6 + a7 + a8 + a9 + a10 + a11;
        var x = (document.getElementById("comment3").style.display = "none");
        if(set3 > a3 && cmt3 < 1) {
            alert("Disaggregated Total is greater than Beneficiaries ");
            document.getElementById("sbt").disabled = true;
        } else {
            document.getElementById("sbt").disabled = false;
        }
        if(a3 !== set3 && cmt3 < 1) {
            if(a3 == set3 && x === "block") {
                document.getElementById("comment3").style.display = "none";
            }
        }
    }

    function test4() {
        var a15 = parseFloat(document.getElementById("t1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a16 = parseFloat(document.getElementById("af1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a17 = parseFloat(document.getElementById("am1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a18 = parseFloat(document.getElementById("cif1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a19 = parseFloat(document.getElementById("cim1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a20 = parseFloat(document.getElementById("upf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a21 = parseFloat(document.getElementById("upm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a22 = parseFloat(document.getElementById("pnf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a23 = parseFloat(document.getElementById("pnm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var cmt4 = document.getElementById("comment4").value.length;
        var set4 = a16 + a17 + a18 + a19 + a20 + a21 + a22 + a23;
        if(a15 !== set4 && cmt4 < 1) {
            document.getElementById("t1.1.10").style.backgroundColor = "red";
            document.getElementById("comment4").style.backgroundColor = "red";
            document.getElementById("comment4").style.display = "block";
            alert("Error: \nCheck Total Number of Beneficiaries that confirm receipt of periodic social transfer");
        } else {
            document.getElementById("comment4").value = "";
            document.getElementById("comment4").style.display = "none";
        }
    }

    function test4a() {
        var a15 = parseFloat(document.getElementById("t1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a16 = parseFloat(document.getElementById("af1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a17 = parseFloat(document.getElementById("am1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a18 = parseFloat(document.getElementById("cif1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a19 = parseFloat(document.getElementById("cim1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a20 = parseFloat(document.getElementById("upf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a21 = parseFloat(document.getElementById("upm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a22 = parseFloat(document.getElementById("pnf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a23 = parseFloat(document.getElementById("pnm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var cmt4 = document.getElementById("comment4").value.length;
        var set4 = a16 + a17 + a18 + a19 + a20 + a21 + a22 + a23;
        var x = (document.getElementById("comment4").style.display = "none");
        if(a15 !== set4 && cmt4 < 1) {
            if(a15 == set4 && x === "block") {
                document.getElementById("comment4").style.display = "none";
            }
        }
    }

    function reSum2() {
        var num1 = parseFloat(document.getElementById("f1.1.2").value.replace(/[^\d\.\-]/g, ""));
        var num2 = parseFloat(document.getElementById("m1.1.2").value.replace(/[^\d\.\-]/g, ""));
        var num3 = parseFloat(document.getElementById("f1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var num4 = parseFloat(document.getElementById("m1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var enf = parseFloat(document.getElementById("enF").value.replace(/[^\d\.\-]/g, ""));
        var enm = parseFloat(document.getElementById("enM").value.replace(/[^\d\.\-]/g, ""));
        var numTotalAgreedRegister = num4 + num3;
        var numTotalBeneEnrolled = enm + enf;
        var AttritionEnrolled = ((numTotalBeneEnrolled / numTotalAgreedRegister)) * 100;
        var numt = num4 + num3 - (num2 + num1);
        var numat = 100 - (((num2 + num1) / (num4 + num3)) * 100);
        var menrol = num1 - enf + (num2 - enm);
        document.getElementById("t1.1.1").value = num3 + num4;
        document.getElementById("t1.1.2").value = num1 + num2;
        document.getElementById("f1.1.3").value = num3 - num1;
        document.getElementById("m1.1.3").value = num4 - num2;
        document.getElementById("t1.1.3").value = numt;
        document.getElementById("p1.1.4").value = numat.toFixed(2);
        document.getElementById("t1.1.6").value = num1 + num2;
        document.getElementById("f1.1.6").value = num1 - enf;
        document.getElementById("m1.1.6").value = num2 - enm;
        document.getElementById("t1.1.6").value = menrol;
        document.getElementById("enT").value = enf + enm;
        document.getElementById("enAT").value = AttritionEnrolled.toFixed(2);
        let px = document.getElementById("t1.1.1").value;
        let cc = "NaN";
        if(px == cc) {
            document.getElementById("t1.1.1").value = "0";
        }
    }

    function reSum5() {
        var num3 = parseFloat(document.getElementById("f1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var num4 = parseFloat(document.getElementById("m1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var numTotalTransferred = parseFloat(document.getElementById("t1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var numTotalPaid = parseFloat(document.getElementById("1.1.9").value.replace(/[^\d\.\-]/g, ""));
        var att = numTotalTransferred - numTotalPaid;
        var att2 = (att / (numTotalTransferred)) * 100;
        document.getElementById("t1.1.8").value = num3 + num4;
        document.getElementById("q").value = att2.toFixed(2);
        document.getElementById("p").value = att;
        let px = document.getElementById("p").value;
        let qx = document.getElementById("q").value;
        let cc = "NaN";
        if(px == cc) {
            document.getElementById("p").value = "0";
        }
        if(qx == cc) {
            document.getElementById("q").value = "0";
        }
    }

    function test() {
        var c = parseFloat(document.getElementById("t1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var d = parseFloat(document.getElementById("a1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var e = parseFloat(document.getElementById("ci1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var f = parseFloat(document.getElementById("up1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var g = parseFloat(document.getElementById("psn1.1.1").value.replace(/[^\d\.\-]/g, ""));
        var cmt1 = document.getElementById("comment1").value.length;
        var set1 = d + e + f + g;
        var ent = parseFloat(document.getElementById("enT").value.replace(/[^\d\.\-]/g, ""));
        var o = parseFloat(document.getElementById("af1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var p = parseFloat(document.getElementById("am1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var q = parseFloat(document.getElementById("cif1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var r = parseFloat(document.getElementById("cim1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var s = parseFloat(document.getElementById("upf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var t = parseFloat(document.getElementById("upm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var u = parseFloat(document.getElementById("pnf1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var v = parseFloat(document.getElementById("pnm1.1.5").value.replace(/[^\d\.\-]/g, ""));
        var cmt2 = document.getElementById("comment2").value.length;
        var set2 = o + p + q + r + s + t + u + v;
        var a3 = parseFloat(document.getElementById("t1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a4 = parseFloat(document.getElementById("af1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a5 = parseFloat(document.getElementById("am1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a6 = parseFloat(document.getElementById("cif1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a7 = parseFloat(document.getElementById("cim1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a8 = parseFloat(document.getElementById("upf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a9 = parseFloat(document.getElementById("upm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a10 = parseFloat(document.getElementById("pnf1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a11 = parseFloat(document.getElementById("pnm1.1.8").value.replace(/[^\d\.\-]/g, ""));
        var a12 = parseFloat(document.getElementById("1.1.9").value.replace(/[^\d\.\-]/g, ""));
        var cmt3 = document.getElementById("comment3").value.length;
        var set3 = a4 + a5 + a6 + a7 + a8 + a9 + a10 + a11;
        var a15 = parseFloat(document.getElementById("t1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a16 = parseFloat(document.getElementById("af1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a17 = parseFloat(document.getElementById("am1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a18 = parseFloat(document.getElementById("cif1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a19 = parseFloat(document.getElementById("cim1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a20 = parseFloat(document.getElementById("upf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a21 = parseFloat(document.getElementById("upm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a22 = parseFloat(document.getElementById("pnf1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var a23 = parseFloat(document.getElementById("pnm1.1.10").value.replace(/[^\d\.\-]/g, ""));
        var cmt4 = document.getElementById("comment4").value.length;
        var set4 = a16 + a17 + a18 + a19 + a20 + a21 + a22 + a23;
        var state = document.getElementById("states").value;
        var none = "none";
        if(state === "none") {
            document.getElementById("states").style.backgroundColor = "red";
            alert("Error: Select your State");
        } else if(c !== set1 && cmt1 < 1) {
            document.getElementById("t1.1.1").style.backgroundColor = "red";
            document.getElementById("comment1").style.backgroundColor = "red";
            document.getElementById("comment1").style.display = "block";
            alert("Error: \nTotal Number of Beneficiaries mined from Agreed Register not equal input reason");
        } else if(ent !== set2 && cmt2 < 1) {
            document.getElementById("enT").style.backgroundColor = "red";
            document.getElementById("comment2").style.backgroundColor = "red";
            document.getElementById("comment2").style.display = "block";
            alert("Error: \nCheck Total Number of Beneficiaries enrolled");
        } else if(a3 !== set3 && cmt3 < 1) {
            document.getElementById("t1.1.8").style.backgroundColor = "red";
            document.getElementById("comment3").style.backgroundColor = "red";
            document.getElementById("comment3").style.display = "block";
            alert("Error: \nCheck Total Number of Beneficiaries transferred to PSP for payment");
        } else if(a15 !== set4 && cmt4 < 1) {
            document.getElementById("t1.1.10").style.backgroundColor = "red";
            document.getElementById("comment4").style.backgroundColor = "red";
            document.getElementById("comment4").style.display = "block";
            alert("Error: \nCheck Total Number of Beneficiaries that confirm receipt of periodic social transfer");
        } else {
            document.getElementById("sbt").disabled = false;
            alert("No Error found \nYou can proceed to submit");
        }
    }

    document.getElementById("timestamp").value = new Date().toLocaleString();

</script>
<!-- Bootstrap core JavaScript-->

