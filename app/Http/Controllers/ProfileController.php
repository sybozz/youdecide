<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profileTimeline()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('user.timeline', ['userInfo'=>$userInfo]);
    }

    public function profileSetting()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('user.profileSetting', ['userInfo'=>$userInfo]);
    }
    public function profileInfoUpdate(Request $request)
    {

    }


    public function proposalList()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('user.myProposals', ['userInfo'=>$userInfo]);
    }

    public function profilePictureUpload(Request $request)
    {
        $getUserId = $request->get('userId');

        $this->validate($request, [
            'profilePicture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $getImageFile = $request->file('profilePicture');
        $imageFileName = time().'.'.$getImageFile->getClientOriginalName();

        $getImageFile->move('uploads/profile/', $imageFileName);

        DB::table('users')->where('id', $getUserId)
            ->update(['profilePicture' => $imageFileName]);

        return redirect()->back()->with('msg', 'Image uploaded successfully.');
    }


    public function profileDetailsUpdate(Request $request)
    {
        DB::table('users')->where('id', $request
            ->get('userId'))
            ->update([
                'name'=> $request->get('name'),
                'profession'=> $request->get('profession'),
                'bio'=> $request->get('bio'),
            ]);

        return redirect()->back()->with('msg', 'Profile info updated successfully.');
    }


}
