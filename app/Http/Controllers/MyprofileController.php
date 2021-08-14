<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyprofileController extends Controller
{
    public function profile()
    {
        return view('profile.my_profile');
    }

    public function alluser()
    {
        $user = User::all();
        return view('profile.user_profile', ['user' => $user->all()]);
        
    }
}
