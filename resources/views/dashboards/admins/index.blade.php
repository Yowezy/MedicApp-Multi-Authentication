@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

        <div class="main-content-wrap">
            <main class="page-content">
                <div class="row">
                    <div class="col col-12 col-md-6 col-xl-3">
                        <div class="card animated fadeInUp delay-01s bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col col-5">
                                        <div class="icon p-0 fs-48 text-primary opacity-50 icon icofont-injection-syringe">
                                        </div>
                                    </div>

                                    <div class="col col-7">
                                        <h6 class="mt-0 mb-1">الجرعات المتوفرة </h6>
                                        <div class="count text-primary fs-20"> 1996 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-md-6 col-xl-3">
                        <div class="card animated fadeInUp delay-03s bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col col-5">
                                        <div class="icon p-0 fs-48 text-primary opacity-50 icon icon icofont-id-card"></div>
                                    </div>

                                    <div class="col col-7">
                                        <h6 class="mt-0 mb-1">عدد المسجلين بالنظام</h6>
                                        <div class="count text-primary fs-20">4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-md-6 col-xl-3">
                        <div class="card animated fadeInUp delay-02s bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col col-5">
                                        <div class="icon p-0 fs-48 text-primary opacity-50 icon icofont-patient-bed"></div>
                                    </div>

                                    <div class="col col-7">
                                        <h6 class="mt-0 mb-1">إصابات جديدة</h6>
                                        <div class="count text-primary fs-20">104</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-md-6 col-xl-3">
                        <div class="card animated fadeInUp delay-04s bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col col-5">
                                        <div class="icon p-0 fs-48 text-primary opacity-50 icon icofont-heart-beat-alt">
                                        </div>
                                    </div>

                                    <div class="col col-7">
                                        <h6 class="mt-0 mb-1 text-nowrap">الوفيات</h6>
                                        <div class="count text-primary fs-20">5</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>


                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                Patients Records
                            </div>

                            <div class="card-body">
                                <a href="{{ route('admin.patients') }}"> <button class="btn btn-light btn-square">
                                        <span class="btn-icon icofont-cursor-drag"></span>
                                    </button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary text-center">
                            <div class="card-header">
                                View Vaccines Request
                            </div>
                            <div class="card-body">
                                <a href="{{ route('admin.view_vaccines') }}"> <button class="btn btn-light btn-square">
                                        <span class="btn-icon icofont-cursor-drag"></span>
                                    </button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary text-end">
                            <div class="card-header">
                                View PCR-test Results
                            </div>
                            <div class="card-body">
                                <a href="{{ route('admin.pcr') }}"> <button class="btn btn-light btn-square">
                                        <span class="btn-icon icofont-cursor-drag"></span>
                                    </button> </a>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                Manage Users Accounts
                            </div>

                            <div class="card-body">
                                <a href="{{ route('admin.users') }}"> <button class="btn btn-light btn-square">
                                        <span class="btn-icon icofont-cursor-drag"></span>
                                    </button> </a>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary text-center">
                            <div class="card-header">
                                Reports
                            </div>
                            <div class="card-body">
                                <a href="{{ route('admin.reports') }}"> <button class="btn btn-light btn-square">
                                        <span class="btn-icon icofont-cursor-drag"></span>
                                    </button> </a>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </main>
        @endsection
