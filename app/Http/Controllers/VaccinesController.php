<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccinesController extends Controller
{

    public function index()
    {
        $vaccine  = Vaccine::all();
        $count = count($vaccine);
        return view('admins.view_vaccines', compact('vaccine', 'count'));
    }

    function store(Request $request)
    {
        $userId = $request->user()->id;
        $vaccine =   Vaccine::create($request->all());
        Vaccine::where('id', $vaccine->id)->update(['user_id' => $userId]);
        // $patients = Patient::where('user_id', $userId)->get();

        return redirect()->route('user.dashboard')
            ->with('success', 'vaccine created successfully.');
    }
}
