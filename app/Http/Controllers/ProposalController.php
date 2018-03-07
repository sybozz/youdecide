<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Proposal;

class ProposalController extends Controller
{

    public function proposalById($id)
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        $proposal = DB::table('proposals')
            ->where('id', $id)
            ->first();

        return view('website.proposalDetail', [
            'userInfo'=>$userInfo,
            'proposal'=>$proposal
        ]);
    }


    public function createProposal()
    {
        $userInfo = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('user.newProposal', ['userInfo'=>$userInfo]);
    }

    public function storeProposal(Request $request)
    {

//        DB::table('proposals')->insert([
//            'title'             => $request->get('title'),
//            'category'          => $request->get('category'),
//            'tag'               => $request->get('tag'),
//            'description'       => $request->get('description'),
//            'status'            => 0,
////            'created_by'        => Auth::user()->id,
//            "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
//            "updated_at" => \Carbon\Carbon::now(),  # \Datetime()
//        ]);

        $proposal = new Proposal();
        $proposal->title = $request->get('title');
        $proposal->category = $request->get('category');
        $proposal->tag = $request->get('tag');
        $proposal->description = $request->get('description');
        $proposal->status =0;
        $proposal->created_by = Auth::user()->id;
        $proposal->save();

        return redirect()->back()->with('msg', 'Proposal sent for approval!');
    }



}
