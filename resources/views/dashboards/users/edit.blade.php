@extends('layouts.master')

@section('content')
    <main class="main-content">

        <div class="main-content-wrap">
            <main class="page-content">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Edit User Account
                            </div>

                            <div class="card-body">
                                <form action="update/{{ $patient->user_id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Name"
                                                value="{{ $patient->name }}" name="name">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">National-ID</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="National-ID"
                                                value="{{ $patients->national_id }}" name="national_id">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Edit Age</label>
                                        <div class="col-sm-9">
                                            <input type="Number" class="form-control" placeholder="Age"
                                                value="{{ $patient->age }}" name="Age">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Edit Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Edit Nationality"
                                                value="{{ $patient->nationality }}" name="nationality">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Edit Phone</label>
                                        <div class="col-sm-9">
                                            <input type="Number" class="form-control" placeholder="Edit phone"
                                                value="{{ $patient->phone }}" name="phone">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-secondary w-100">Confirm</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </main>
    </div>
    </main>
@endsection
