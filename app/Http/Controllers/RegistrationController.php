<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Display registration form
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.registration");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            "name" => "required|string|max:100|unique:users",
            "email" => "required|email|max:200|unique:users",
            "password" => "required|min:3|max:100",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput(request()->all());
        }

        //User::create(request()->all());
        //return redirect()->back();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have register succesfull');
        } else {
            return back()->with('fail', 'Something wrong');
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
