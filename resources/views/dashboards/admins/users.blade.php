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

            </main>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            Manage Users Accounts
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>

                                                {{-- <td>{{ $user->role }}</td> --}}
                                                @if ($user->role == '1')
                                                    <td><span class="badge badge-pill badge-dark">ADMIN</span></td>
                                                @else
                                                    <td><span class="badge badge-pill badge-primary">USER</span></td>
                                                @endif
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="actions">

                                                        <a href="edit/{{ $user->id }}"><button
                                                                class="btn btn-outline-info">
                                                                Edit<span class="btn-icon icofont-gear ms-2"></span>
                                                            </button></a>

                                                        <form action="delete/{{ $user->id }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_token" id="token"
                                                                value="{{ csrf_token() }}">
                                                            <a href="delete/{{ $user->id }}">
                                                                <button class="btn btn-error btn-icon-animation">
                                                                    Remove
                                                                    <span class="btn-icon icofont-trash"></span>
                                                                </button> </a>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
