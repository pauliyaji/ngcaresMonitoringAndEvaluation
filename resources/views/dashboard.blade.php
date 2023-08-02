@extends('layouts/layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
{{--
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
--}}
    </div>

    <!-- Content Row -->
    @if(Auth::user()->roles->first()->id == 17)
    <div class="row">

        <!-- Dli1.1s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('socialtransfers.index') }}">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DLI-1.1 -Submissions - {{ App\Models\Dli1::count() }}</div>
                                {{--                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Customer::count() }}</div>--}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Dli1.2s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('lipws.index') }}">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DLI-1.2 -Submissions - {{ App\Models\Dli2::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <!-- Dli3s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('livelihoods.index') }}">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DLI-1.3 -Submissions - {{ App\Models\Dli3::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <!-- Dli1s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('basicservices.index') }}">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DLI-1.4 -Submissions - {{--{{ App\Models\Dli4::count() }}--}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

    </div>

    <div class="row">
    <!-- Bookings-->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('socialtransfers.index') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dli 2.1 - Submissions - {{--{{ $users->count() }}--}}</div>
                        {{--                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Booking::count() }}</div>--}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Bookings-->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('socialtransfers.index') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dli 2.2 - Submissions - {{--{{ $users->count() }}--}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Bookings-->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('socialtransfers.index') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dli 2.3 - Submissions - {{--{{ $users->count() }}--}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <!-- Bookings-->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('socialtransfers.index') }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dli 2.4 - Submissions - {{--{{ $users->count() }}--}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>

    <div class="row">
        <!-- Dli3s -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('socialtransfers.index') }}">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dli 3.1 - Submissions - {{--{{ $users->count() }}--}}</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <!-- Rooms -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('socialtransfers.index') }}">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dli 3.2 - Submissions - {{--{{ $users->count() }}--}}</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <!-- Rooms -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('socialtransfers.index') }}">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dli 3.3 - Submissions - {{--{{ $users->count() }}--}}</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

    </div>
    @endif



</div>

@endsection

    @section('scripts')

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('/vendor/chart.js/Chart.min.js') }}"></script>
      {{--  <script type="text/javascript">
            var _labels = {!! json_encode($labels) !!}
            var _data = {!! json_encode($data) !!}

            var _plabels = {!! json_encode($plabels) !!}
            var _pdata = {!! json_encode($pdata) !!}

        </script>--}}

        <!-- Page level custom scripts -->
        <script src="{{ asset('/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('/js/demo/chart-pie-demo.js') }}"></script>

        @endsection

