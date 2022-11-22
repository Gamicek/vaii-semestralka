<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resourc
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.login');
    }

    /**
     * Try to authenticate user with given credentials
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "email" => "required|email|max:200|",
            "password" => "required|min:3|max:100",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        $user = User::where('email', 'LIKE', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);

                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    /**
     * Logout user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('fe-pages.home-page');
    }
}
