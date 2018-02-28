<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebateController extends Controller
{
    public function createDebate()
    {
        return view('user.createDebate');
    }
}
