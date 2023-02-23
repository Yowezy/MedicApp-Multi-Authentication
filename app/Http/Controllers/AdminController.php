<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Test;
use App\Models\Vaccine;
use App\Models\Patient;
use Illuminate\Support\Facades\Blade;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboards.admins.index');
    }

    function store()
    {
        $patients = Patient::all();
        return view('dashboards.admins.patients', compact('patients'));
    }

    //View Vacc requests Page
    public function view_vacc()
    {
        $vaccine  = Vaccine::With('user')->get();
        // $users = user::all();
        $count = count($vaccine);
        return view('dashboards.admins.view_vaccines ', compact('vaccine', 'count'));
    }

    // PCR-Test Results page
    function pcr_results(Request $request)
    {
        $tests  = Test::with('patient')->get();
        $count = count($tests);

        return view('dashboards.admins.pcr', compact('tests'));
    }

    // Manage Users Accounts
    public function manage_users()
    {
        $users  = User::all();
        $count = count($users);
        return view('dashboards.admins.users', compact('users', 'count'));
    }

    // view all reports
    public function view_reports()
    {

        return view('dashboards.admins.reports');
    }

    // Users edit , delete , udate :
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboards.admins.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->role = $request->get('role');
        $user->email = $request->get('email');
        $user->save();
        return view('dashboards.admins.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        User::destroy($id);
        return view('dashboards.admins.index');
    }

    //////////Vaccine accept,reject
    public function accept(Request $request, $id)
    {
        $vaccine = Vaccine::find($id);
        $vaccine->status = "approved";
        $vaccine->save();
        return back();
    }

    public function reject(Request $request, $id)
    {
        $vaccine = Vaccine::find($id);
        $vaccine->status = "disapproved";
        $vaccine->save();
        return back();
    }
}
