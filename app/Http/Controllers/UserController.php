<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request)
    {
        $userId = $request->user()->id;
        $patients  = Patient::where('user_id', $userId)->get();

        return view('dashboards.users.index', compact('patients'));
    }


    function store()
    {
        $patients  = Patient::all();
        $count = count($patients);
        return view('dashboards.users.patients', compact('patients', 'count'));
    }


    function vacc_request()
    {
        return view('dashboards.users.vaccines');
    }


    function pcr_results(Request $request)
    {
        $tests  = Test::with('patient')->get();
        $count = count($tests);

        return view('dashboards.users.pcr', compact('tests'));
    }

    // Patient edit , delete , udate :
    public function edit(Request $request, $user_id)
    {
        $patients = Patient::find($user_id);
        return view('dashboards.users.index', compact('patient'));
    }

    public function update(Request $request, $user_id)
    {
        $patients = Patient::find($user_id);
        $patients->name = $request->get('name');
        $patients->national_id = $request->get('national_id');
        $patients->age = $request->get('age');
        $patients->nationality = $request->get('nationality');
        $patients->phone = $request->get('phone');
        $patients->save();
        return view('dashboards.users.index');
    }

    public function delete($id)
    {
        $patients  = Patient::find($id);
        Patient::destroy($id);
        return back();
    }
}



    // function allusers()
    // {

    //     $users  = User::all();
    //     $count = count($users);
    //     return view('layouts.master', compact('count'));
    // }
