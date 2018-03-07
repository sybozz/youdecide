<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.login');
    }

    public function pendingProposals()
    {
        return view('manager.pendingProposals');
    }
}
