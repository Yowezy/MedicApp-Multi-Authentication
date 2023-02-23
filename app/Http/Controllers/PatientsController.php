<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $patients = Patient::where('user_id', $userId)->get();
        $count = count($patients);
        return view('user.dashboard', compact('patients', 'count'));
    }

    public function store(Request $request)
    {
        $userId = $request->user()->id;
        $patient =   Patient::create($request->all());
        Patient::where('id', $patient->id)->update(['user_id' => $userId]);

        return redirect()->route('user.dashboard')
            ->with('success', 'Patient created successfully.');
    }
}
