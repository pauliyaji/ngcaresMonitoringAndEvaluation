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
            <div class="card-header py-3" style="background-color: #0e87f3;">
                <h6 class="m-0 font-weight-bold text-white">RESULT AREA 3
                </h6>
            </div>
            <div class="card-body">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#credit" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Credit Grants</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#operations" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Operations Grants</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#enhancement" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Enhancement Grants</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="credit" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <h3>Credit Grant form goes here</h3>
                    </div>
                    <div class="tab-pane fade" id="operations" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h3>Operations Grant form goes here</h3>
                    </div>
                    <div class="tab-pane fade" id="enhancement" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <h3>Enhancement Grant form goes here</h3>
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
