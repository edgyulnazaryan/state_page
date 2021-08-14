<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statement;
use App\Models\Reviews;
/*
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
*/
class StatementController extends Controller
{
    public function create(Request $req)
    {
        $statment = new statement();
        $statment-> title = $req -> input('title');
        $statment-> content = $req -> input('content');
        $statment-> category = $req -> input('category');
        $statment-> price = $req -> input('price');
        $statment-> dead_line = $req -> input('dead_line');
        $statment-> gender = $req -> input('gender');
        $statment-> age = $req -> input('age');
        
        

        $photo = $req->file('image')->getClientOriginalName();

        $destination = base_path() . '/public/uploads';
        $req->file('image')->move($destination, $photo);
        $statment-> image = $req -> file('image');

        

        $statment-> image = '/uploads/'.$photo;
        $statment -> save();

        return redirect()->route('home')->with('success', 'Statement is created․․․');
    }

    public function DataOne($id)
    {
        $statment = new statement();
        $review = new Reviews();
        return view('statement.state_one', ['data' => $statment->find($id), 'data_review' => $review->all()->where('state_id', $id)]);
    }


    public function index()
    {
        $statment = new statement();
        return view('statement.create', ['data' => $statment->all()]);
    }

    public function show()
    {
        $statment = new statement();
        return view('statement.show', ['data' => $statment->all()]);
    }
    
    public function remove($id)
    {
        statement::find($id)->delete();
        return redirect()->route('home')->with('danger', 'Statement is removed');
    }

    public function update($id)
    {
        $statment = new statement();
        return view('statement.update', ['data' => $statment->find($id)]);
    }

    public function edit($id, Request $req)
    {
        
        $statment = statement::find($id);
        $statment->fill($req->all());
        $statment->save();

        return redirect()->route('home')->with('success', 'Statement is updated');
    }

    
}
