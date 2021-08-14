<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statement;

class SearchController extends Controller
{
    public function index()
    {
        return view('home');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = "";
        $gender = "";
        $age = "";
        
        

        if ($request->has('search')) 
        {
            $search = $request->search;
        }

        if ($request->has('gender')) 
        {
            $gender = $request->gender;
        }

        if ($request->has('age')) 
        {
            $age = $request->age;
        }

        if(empty($request))
        {
            $data = statement::all();
        }
        if (isset($request->gender)) 
        {
            $data = statement::where('gender', "{$request->gender}")->get();
        }
        if (isset($request->search))
        {
            $data = statement::where("title","LIKE", "%{$search}%")->get();
        }
        if (isset($request->age) && $request->age == '1')
        {
            $data = statement::where("age", "<", "18")->get();
        }
        if (isset($request->age) && $request->age == '2')
        {
            $data = statement::where("age", ">", "18")->where("age", "<", "65")->get();
        }
        if (isset($request->age) && $request->age == '3')
        {
            $data = statement::where("age", ">", "65")->get();
        }
        if (isset($request->search) && isset($request->gender))
        {
            /* JOIN_OV @NDHANUR@ DURS BEREL */
            $data = statement::where("title","LIKE", "%{$search}%")->where('gender', "{$request->gender}")->get();
        }
        if (isset($request->search) && isset($request->gender) && $request->age == '1')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", "<", "18")
            ->where('gender', "{$request->gender}")
            ->get();
        }
        if (isset($request->search) && isset($request->gender) && $request->age == '2')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", ">", "18")
            ->where("age", "<", "65")
            ->where('gender', "{$request->gender}")
            ->get();
        }
        if (isset($request->search) && isset($request->gender) && $request->age == '3')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", ">", "65")
            ->where('gender', "{$request->gender}")
            ->get();
        }

        if (isset($request->age) && isset($request->gender) && $request->age == '1')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", "<", "18")
            ->where('gender', "{$request->gender}")
            ->get();
        }

        if (isset($request->age) && isset($request->gender) && $request->age == '2')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", ">", "18")
            ->where("age", "<", "65")
            ->where('gender', "{$request->gender}")
            ->get();
        }

        if (isset($request->age) && isset($request->gender) && $request->age == '3')
        {
            $data = statement::where("title","LIKE", "%{$search}%")
            ->where("age", ">", "65")
            ->where('gender', "{$request->gender}")
            ->get();
        }
        
        
        
        return $data;
    }
}
