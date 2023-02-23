<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Patient;

class TestsController extends Controller


{
    public function index()
    {
        $tests  = Test::all();
        $count = count($tests);
        return view('home', compact('tests', 'count'));
    }

    public function store(Request $request)
    {
        $userId = $request->user()->id;
        $test =   Test::create($request->all());
        test::where('id', $test->id)->update(['user_id' => $userId]);
        $patients = Patient::where('user_id', $userId)->get();

        return redirect()->route('user.dashboard')
            ->with('success', 'test created successfully.');
    }
    // public function findresult($id)
    // {
    //     $tests  = Test::find($id);
    //     $count = count($tests);
    //     return view('index', compact('tests', 'count'));
    // }

}
