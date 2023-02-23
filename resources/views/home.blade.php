@extends('layouts.master')

@section('content')
<hr>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
<h4> Welome {{ Auth::user()->name }}</h4>
<hr>
              <div class="card-body">
                <div class="row justify-content-left">
                  <div class="col-12 col-md-6">
                      <div class="card bg-success">
                        <div class="card-header">
                          <div class="icon sli-check"></div>
                       SUCCESS
                        </div>
                        <div class="card-body">Your Account Has Been Successfully Created.</div>
                      </div>
                    </div>
              </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
