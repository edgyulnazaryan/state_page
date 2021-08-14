<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\statement;

class ReviewsController extends Controller
{
    public function create(Request $req)
    {
        $reviews = new Reviews();
        $reviews-> text = $req -> input('text');
        $reviews-> rate = $req -> input('rate');
        $reviews-> state_id = $req -> input('state_id');
        
        $reviews -> save();

        return redirect()->route('home')->with('success', 'Review is created․․․');
    }

    

}
