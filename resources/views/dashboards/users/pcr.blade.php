@extends('layouts.master')

@section('content')
    <main class="main-content">
        <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

        <div class="main-content-wrap">
            <div class="page-content">
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
                                        <h6 class="mt-0 mb-1">الجرعات المتوفرة</h6>
                                        <div class="count text-primary fs-20">255</div>
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
                                        <div class="count text-primary fs-20">90</div>
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
                                        <div class="count text-primary fs-20">15</div>
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
                                        <div class="count text-primary fs-20">7</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-0">
                <div class="card-header">
                    <div class="add-pcr">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-pcr">
                            <span class="btn-icon icofont-plus me-2"></span>
                            Add PCR Result
                        </button>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="card">
                    <div class="card-header">
                        Latest PCR Result
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Date</th>
                                        {{-- <th scope="col">Status</th> --}}

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tests as $test)
                                        <tr>
                                            <td>{{ $test->patient_id }}</td>
                                            <td>{{ $test->patient->name }}</td>
                                            <td><span class="badge badge-light">{{ $test->pcr_result }}</span></td>
                                            <td>{{ $test->pcr_date }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        </div>


        <!-- Add pcr -->
        <div class="modal fade" id="add-pcr" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add PCR-test Result</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('addPcr') }}" method="POST">
                            @csrf
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


                            <div class="form-group">
                                <input class="form-control" name="pcr_result" type="text" placeholder="Result">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="date" name="pcr_date" placeholder="Date">
                            </div>


                            <div class="form-group">
                                <input class="form-control" type="number" name="patient_id" placeholder="Patient-ID">
                            </div>

                            <div class="modal-footer d-block">
                                <div class="actions justify-content-between">
                                    <button type="submit" class="btn btn-info">Submit Result</button>
                                    <button type="button" class="btn btn-error" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- end Add patients modals -->
    @endsection
