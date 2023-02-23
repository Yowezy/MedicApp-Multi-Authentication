@extends('layouts.admin')

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
                                <form action="update/{{ $user->id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Name"
                                                value="{{ $user->name }}" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Role</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Role"
                                                value="{{ $user->role }}" name="role">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Edit Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Edit Email"
                                                value="{{ $user->email }}" name="email">
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
