<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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


    public function loadProposals()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        $proposals = DB::table('proposals')
            ->join('users', 'proposals.created_by', '=', 'users.id')
            ->select('proposals.*', 'users.profilePicture')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website.proposalList', [
            'userInfo'=>$userInfo,
            'proposals'=>$proposals
        ]);
    }

    public function loadDebates()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('website.debateList', [
            'userInfo'=>$userInfo
        ]);
    }

    public function loadResults()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('website.resultList', [
            'userInfo'=>$userInfo,
        ]);
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
