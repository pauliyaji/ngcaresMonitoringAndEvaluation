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
            <div class="card-header py-3" style="background-color: #c97704;">
                <h6 class="m-0 font-weight-bold text-white">RESULT AREA 2
                </h6>
            </div>
            <div class="card-body">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#agricinputs" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Agric Input & Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#agricinfra" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Agric Infrastructures</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#agricassets" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Agricultural Assets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#wetmarkets" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Wet Markets</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="agricinputs" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-warning p-4">
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.1.1 Total No. of Farmers who are Utilizing Agricultural Inputs (Disagreggated by Gender)</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="uAi_gender_f" id="uAi_gender_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="uAi_gender_m" id="uAi_gender_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="uAi_gender_total" id="uAi_gender_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.1.2 Total No. of Farmers who are Utilizing Agricultural Inputs (Disagreggated by Value Chain)</span>
                                    <div class="col-md-3">
                                        <label>Crops</label>
                                        <input type="text" class="form-control" name="uAi_gender_f" id="uAi_gender_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Livestock</label>
                                        <input type="text" class="form-control" name="uAi_vc_livest" id="uAi_vc_livest" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Fisheries</label>
                                        <input type="text" class="form-control" name="uAi_vc_fish" id="uAi_vc_fish" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="uAi_vc_total" id="uAi_vc_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #c97704;">2.1.3 Total No. of Farmers who are Utilizing Climate Smart Agricultural Inputs </span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="uCs_ai_total" id="uCs_ai_total" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.1.4 Toal No. of Farmers Utilizing Agricultural Support Services (Disagreggated by Gender)</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="uAi_ss_f" id="uAi_ss_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="uAi_ss_m" id="uAi_ss_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="uAi_ss_total" id="uAi_ss_total" readonly />
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.1.4.b Total No. of Farmers Utilizing Agricultural Support Services (Disagreggated by Value Chain)</span>
                                    <div class="col-md-3">
                                        <label>Crops</label>
                                        <input type="text" class="form-control" name="uAi_ss_crops" id="uAi_ss_crops" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Livestock</label>
                                        <input type="text" class="form-control" name="uAi_ss_livest" id="uAi_ss_livest" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Fisheries</label>
                                        <input type="text" class="form-control" name="uAi_ss_fish" id="uAi_ss_fish" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="uAi_ss_total" id="uAi_ss_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #c97704;">2.1.5 Total No. of Farmers who are Utilizing Climate Smart Agricultural Services</span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="total_uAi_ss" id="total_uAi_ss" onkeyup="sum()" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-3 card-footer" style="color: white; background-color: #c97704;">2.1.6 No. of Farmers Receiving Agricultural Support Services</span>
                                    <div class="col-md-3">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="recv_uAss_f" id="recv_uAss_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="recv_uAss_m" id="recv_uAss_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="recv_uAss_total" id="recv_uAss_total" readonly />
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
                    <div class="tab-pane fade" id="agricinfra" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-warning p-4">
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.2.1 Total No. of Farmers who are Accessing/Utilizing
                                        Improved Agricultural Infrastructure with agreed LIPW Requirements</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="improvedAi_f" id="improvedAi_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="improvedAi_m" id="improvedAi_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="improvedAi_total" id="improvedAi_total" readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #c97704;">2.2.2 Total No. of Agricultural Infrastructure Completed</span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="totalInfra_completed" id="totalInfra_completed" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #c97704;">2.2.3 Total No. of Completed Agricultural Infrastructure Paid for</span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="totalInfra_paid" id="totalInfra_paid" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.2.4 No. of Farmers Accessing Climate-Smart Improved Agricultural Infrastructure</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="accessAi_f" id="accessAi_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="accessAi_m" id="accessAi_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="accessAi_total" id="accessAi_total" readonly />
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
                    <div class="tab-pane fade" id="agricassets" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-warning p-4">
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.2.1 Total No. of Farmers who are Accessing/Utilizing
                                        2.3.1 Total No. of Farmers Utilizing Agricultural Assets</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="aA_f" id="aA_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="aA_m" id="aA_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="aA_total" id="aA_total" readonly />
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
                    <div class="tab-pane fade" id="wetmarkets" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <form class="row g-3">
                            @csrf
                            <div class="container border border-warning p-4">
                                <div class="row">
                                    <span class="card-header col-md-6" style="color: white; background-color: #c97704;">2.4.1 Total No. of Existing Wet Markets With Upgraded Water and Sanitation Services</span>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="totalWm_upgraded" id="totalWm_upgraded" />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <span class="col-md-12 col-xs-12 card-footer" style="color: white; background-color: #c97704;">2.2.1 Total No. of Farmers who are Accessing/Utilizing
                                        2.4.2 Total No. of Sellers Benefitting from Upgraded Wet Markets</span>
                                    <div class="col-md-4">
                                        <label>Female</label>
                                        <input type="text" class="form-control" name="wmSellers_f" id="wmSellers_f" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Male</label>
                                        <input type="text" class="form-control" name="wmSellers_m" id="wmSellers_m" onkeyup="sum()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="wmSellers_total" id="wmSellers_total" readonly />
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
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection

@include('layouts/footer')


<!-- Bootstrap core JavaScript-->



<?php
/**
 * Created by Paul Iyaji.
 * Date: 31/07/2023
 * Time: 19:54
 * Project Name: ngcares
 */
?>
