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
                                        <div class="count text-primary fs-20">15</div>
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
                                        <div class="count text-primary fs-20">15</div>
                                        {{-- {{ $count}} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <main class="main-content">
                    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

                    <div class="main-content-wrap">
                        <header class="page-header">
                            <!-- <h1 class="page-title">Patients</h1> -->
                        </header>

                        <div class="page-content">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr class="bg-primary text-white">
                                                    <th scope="col">Hospital-ID</th>
                                                    <th scope="col">National-ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Number</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Time-Stamp</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patients as $patient)
                                                    <tr>
                                                        <td>
                                                            <div class="text-muted">{{ $patient->user_id }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted">{{ $patient->national_id }}</div>
                                                        </td>
                                                        <td>
                                                            <strong>{{ $patient->name }}</strong>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted text-nowrap">{{ $patient->age }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center nowrap text-primary">
                                                                <span class="icofont-ui-cell-phone p-0 me-2"></span>
                                                                {{ $patient->phone }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="address-col">{{ $patient->state }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-muted text-nowrap">{{ $patient->created_at }}
                                                            </div>
                                                        </td>
                                                        @if ($patient->isVaccinated === 'yes')
                                                            <td><span class="badge badge-success">Vaccinated</span></td>
                                                        @else
                                                            <td><span class="badge badge-danger">Not Vaccinated</span></td>
                                                        @endif


                                                        <td>

                                                            <div class="actions">
                                                                {{-- <button class="btn btn-info btn-sm btn-square rounded-pill">
                                                                    <span class="btn-icon icofont-ui-edit"></span>
                                                                </button> --}}

                                                                <form action="delete/{{ $patient->id }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="_token" id="token"
                                                                        value="{{ csrf_token() }}">
                                                                    <a href="delete/{{ $patient->id }}">
                                                                        <button
                                                                            class="btn btn-error btn-sm btn-square rounded-pill">
                                                                            <span class="btn-icon icofont-ui-delete"></span>
                                                                        </button> </a>
                                                                </form>
                                                                {{--  --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    <nav class="mt-4">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous" tabindex="-1"
                                                    aria-disabled="true">
                                                    <span class="icofont-simple-left"></span>
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link"
                                                    href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span class="icofont-simple-right"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>
            @endsection
