<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Http\Request;

class RegisterController extends Controller
{


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 2,
            'password' => Hash::make($data['password']),
        ]);
    }

    // function register(Request $request){

    //     $request->validate([
    //        'name' => ['required', 'string', 'max:255'],
    //        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //        'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     $user = new User();
    //      $user->name = $request->name;
    //      $user->email = $request->email;
    //      $user->role = 2;
    //      $user->password = \Hash::make($request->password);

    //      if( $user->save() ){

    //         return redirect()->back()->with('success','You are now successfully registerd');
    //      }else{
    //          return redirect()->back()->with('error','Failed to register');
    //      }
    // }
}
