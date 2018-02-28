<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function timeline()
    {
        return view('user.timeline');
    }

    public function profileSetting()
    {
        return view('user.profileSetting');
    }
    public function profileInfoUpdate(Request $request)
    {

    }


    public function proposalList()
    {
        return view('user.myProposals');
    }

    public function profilePictureUpload(Request $request)
    {


        $file = $request->file('profilePicture');
        $file->move('uploads/user', $file->getClientOriginalName());

        return redirect()->back()->with('msg', 'Profile picture updated successfully.');
    }




}
