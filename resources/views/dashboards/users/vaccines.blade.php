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
            <hr>
            <form action="{{ route('addVaccine') }}" method="POST">
                @csrf
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                <h3>Vaccines Request</h3>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="vaccine_name" placeholder="Vccine name">
                    </div>
                </div>


                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="vaccine_quantity" type="number" min="0"
                            oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"
                            placeholder="Quantity">

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <textarea class="form-control" name="notes" rows="4" placeholder="Comment"></textarea>
                    </div>
                    <button class="btn w-100 btn-dark" type="submit">Send form</button>
                </div>
            </form>
        @endsection
