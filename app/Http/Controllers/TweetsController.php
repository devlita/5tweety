<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {        
        return view('home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    
    public function store()
    {
        $attribute = request()->validate([
            'body' => 'required|max:225'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attribute['body']
        ]);

        return redirect('/home');
    }
}
