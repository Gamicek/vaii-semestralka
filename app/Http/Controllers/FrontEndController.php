<?php

namespace App\Http\Controllers;


class FrontEndController extends Controller
{
    public function homePage(){
        return view('pages.home');
    } 

    public function contactPage(){
        return view('pages.contact');
    }
}
