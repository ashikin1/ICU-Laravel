<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Database\Factories\FeedFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedController extends Controller
{
    //
    public function index() {
        
        // return view('pages.feed.index');
        $feeds =Feed::paginate(5);
        return view ('pages.feed.index', compact('feeds'));
    }

    public function create() {
        return view ('pages.feed.create');
    }

    public function store(Request $request) {
        $validate_request =$request->validate([
            'title'=>'required | string |max:100',
            'description'=>'required | string |max:300',
        ]);
        $validate_request['user_id'] =1;
        Feed::create($validate_request);
        //return redirect()->route('feeds');
        return redirect()->route('feeds')->with('success', 'Feed created successfully');
    }

    public function update(Request $request, Feed $feed) {
        $validate_request =$request->validate([
            'title'=>'required | string |max:100',
            'description'=>'required | string |max:300',
        ]);

        $feed->update($validate_request);
        return redirect()->route('feeds');
        //
        //return redirect()->route('feeds')->with('success', 'Feed update successfully');
    }

    public function show(Feed $feed){
        //die dump
        //dd($feed);
        Log::debug("Show feed", ['feed' =>$feed]);
        return view ('pages.feed.show', compact('feed'));
    }
}
