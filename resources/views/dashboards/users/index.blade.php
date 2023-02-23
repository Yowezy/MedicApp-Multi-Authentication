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
                <hr>


                <!--ADMIN PANEL HERE-->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary">

                            <div class="add-patient">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-patient">
                                    <span class="btn-icon icofont-plus me-2"></span>
                                    Add Patient
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card text-white bg-primary text-center">
                            <div class="add-pcr">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-pcr">
                                    <span class="btn-icon icofont-plus me-2"></span>
                                    Add PCR Result
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="add-patient">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-patient">
                            <span class="btn-icon icofont-plus me-2"></span>
                            Add Patient
                        </button>
                    </div>

                    <div class="add-pcr">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-pcr">
                            <span class="btn-icon icofont-plus me-2"></span>
                            Add PCR Result
                        </button>
                    </div> --}}
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            Patients Records
                        </div>

                        <div class="card-body">
                            <a href="{{ route('user.patients') }}"> <button class="btn btn-light btn-square">
                                    <span class="btn-icon icofont-cursor-drag"></span>
                                </button> </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card text-white bg-primary text-center">
                        <div class="card-header">
                            Vaccines Request
                        </div>
                        <div class="card-body">
                            <a href="{{ route('user.vaccines') }}"> <button class="btn btn-light btn-square">
                                    <span class="btn-icon icofont-cursor-drag"></span>
                                </button> </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card text-white bg-primary text-end">
                        <div class="card-header">
                            PCR-test Results
                        </div>
                        <div class="card-body">
                            <a href="{{ route('user.pcr') }}"> <button class="btn btn-light btn-square">
                                    <span class="btn-icon icofont-cursor-drag"></span>
                                </button> </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="main-content-wrap">
                <header class="page-header">
                    <!-- <h1 class="page-title">Patients</h1> -->
                    <h5><i>
                            {{ Auth::user()->name }} Hospital Patients
                        </i></h5>
                </header>

                <div class="page-content">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="bg-primary text-white">

                                            <th scope="col">ID</th>
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
                                                    <div class="text-muted">{{ $patient->id }}</div>
                                                </td>

                                                {{-- <td>
                                                            <div class="text-muted">{{ $patient->national_id }}</div>
                                                        </td> --}}
                                                <td>
                                                    <strong>{{ $patient->name }}</strong>
                                                </td>
                                                <td>
                                                    <div class="text-muted text-nowrap">
                                                        {{ $patient->age }}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center nowrap text-primary">
                                                        <span class="icofont-ui-cell-phone p-0 me-2"></span>
                                                        {{ $patient->phone }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="address-col">{{ $patient->state }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-muted text-nowrap">
                                                        {{ $patient->created_at }}
                                                    </div>
                                                </td>
                                                @if ($patient->isVaccinated === 'yes')
                                                    <td><span class="badge badge-success">Vaccinated</span>
                                                    </td>
                                                @else
                                                    <td> <span class="badge badge-danger">Not
                                                            Vaccinated</span></td>
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
                                                            <a href="delete/{{ $patient->id }}"> <button
                                                                    class="btn btn-error btn-sm btn-square rounded-pill">
                                                                    <span class="btn-icon icofont-ui-delete"></span>
                                                                </button></a>
                                                        </form>
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
                                            href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span class="icofont-simple-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="add-action-box">
                        <button class="btn btn-primary btn-lg btn-square rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#add-patient">
                            <span class="btn-icon icofont-plus"></span>
                        </button>
                    </div>
                </div>
            </div>
    </main>

    </div>
    </div>
    </main>
    <!--END OF ADMIN PANEL -->

    <!-- Add patients modals -->
    <div class="modal fade" id="add-patient" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new patient - إضافة مريض جديد </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addPatient') }}" method="POST">
                        @csrf
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


                        <!-- <div class="form-group avatar-box d-flex">
                                                                                                                                                                                          <img src="../assets/content/anonymous-400.jpg" width="40" height="40" alt="" class="rounded-500 me-4">

                                                                                                                                                                                          <button class="btn btn-outline-primary" type="button">
                                                                                                                                                                                            Select image<span class="btn-icon icofont-ui-user ms-2"></span>
                                                                                                                                                                                          </button>
                                                                                                                                                                                        </div> -->

                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Name - الإسم ">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="number" name="national_id"
                                placeholder="National ID - الرقم الوطني">
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">


                                    <input class="form-control" type="number" name="age" min="0"
                                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null"
                                        placeholder="Age - العمر">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="form-control" type="text" name="gender" placeholder="Gender - الجنس">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone" type="number"
                                        placeholder="Phone Number - رقم الهاتف">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">

                                <input class="form-control" name="nationality" placeholder="Nationality - الجنسية">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <input class="form-control" name="state" placeholder="State - الولاية">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker" title="هل سبق تطعيمك ضد كرونا؟" name="isVaccinated">
                                        {{-- <option class="d-none">state</option> --}}
                                        <option value="yes"> نعم</option>
                                        <option value="no"> لا</option>
                                    </select>
                                </div>


                                {{-- <div class="form-check form-switch">
                                    <input class="form-check-input" name="isPositive" type="checkbox"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"> مصاب - غير مصاب</label>
                                </div> --}}
                            </div>

                            <hr>
                        </div>
                        <div class="form-group mb-0">
                            <textarea class="form-control" name="notes" placeholder="الملاحظات" rows="3"></textarea>
                        </div>

                </div>
                <div class="modal-footer d-block">
                    <div class="actions justify-content-between">
                        <button type="submit" class="btn btn-info">اضافة مريض</button>
                        <button type="button" class="btn btn-error" data-bs-dismiss="modal">الغاء</button>
                        </form>

                    </div>
                </div>

            </div>
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
    <!-- end Add patients modals -->
@endsection
