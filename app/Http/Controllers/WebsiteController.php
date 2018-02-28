<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('website.proposalList');
    }

    public function proposalDetail()
    {
        return view('website.proposalDetail');
    }


    public function login()
    {
        return view('website.login');
    }

    public function register()
    {
        return view('website.register');
    }






}
