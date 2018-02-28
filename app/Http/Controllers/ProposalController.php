<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function createProposal()
    {
        return view('user.newProposal');
    }
}
