@extends('layouts.admin')

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

            <div class="card">
                <div class="card-header">
                    View Vaccines Requests
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th scope="col">Hospital-ID</th>
                                    <th scope="col">Hospital Name</th>
                                    <th scope="col">Vaccine Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action Button</th>
                                    <th scope="col">Action Button</th>

                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($vaccine as $vac)
                                    <tr>
                                        <td>{{ $vac->user_id }}</td>
                                        <td>{{ $vac->user->name }}</td>
                                        <td>{{ $vac->vaccine_name }} </td>
                                        <td>{{ $vac->vaccine_quantity }} </td>
                                        <td>{{ $vac->created_at }} </td>
                                        <td>{{ $vac->status }} </td>
                                        <td>
                                            <div class="actions">
                                                <form action="accept/{{ $vac->id }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_token" id="token"
                                                        value="{{ csrf_token() }}">

                                                    <button type="submit" class="btn btn-success">
                                                        Accept
                                                    </button>
                                                </form>
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <form action="reject/{{ $vac->id }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_token" id="token"
                                                        value="{{ csrf_token() }}">

                                                    <button type="submit" class="btn btn-danger">
                                                        Reject
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                {{-- <td>
                                            @if ($vac->status === 'pending')
                                        </td>
                                        <td><span class="badge badge-warning">Pending</span></td>

                                        <td>
                                        @elseif ($vac->status === 'approved')
                                        </td>
                                        <td><span class="badge badge-success">Approved</span></td>

                                        <td>
                                        @else
                                            ($vac->status === 'disapproved')
                                        </td>
                                        <td><span class="badge badge-danger">Rejected</span></td>
                                        @endif --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
