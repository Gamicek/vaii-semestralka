<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboardPage()
    {
        $data = Auth::user();
        return view('pages.dashboarad', compact('data'));
    }
}
