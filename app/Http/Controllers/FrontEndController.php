<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

class FrontEndController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }

    public function servicesPage()
    {
        return view('pages.services');
    }

    public function aboutUsPage()
    {
        return view('pages.aboutUs');
    }
}
