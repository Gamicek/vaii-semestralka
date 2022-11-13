<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("pages.login");
    }

    /**
     * Show the form for creating a new resourc
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "email" => "required|email|max:200|",
            "password" => "required|min:3|max:100",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginID', $user->id);
                return redirect('dashboarad');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function dashboarad()
    {
        $data = array();
        if (Session::has('loginID')) {
            $data = User::where('id', '=', Session::get('loginID'))->first();
        }
        return view('pages.dashboarad', compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('login');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
