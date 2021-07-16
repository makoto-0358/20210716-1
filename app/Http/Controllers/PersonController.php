<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('index',['items'=> $items]);
    }
    public function find(Request $request)
    {
        return view('find', ['input'=>'']);
    }
    public function search(Request $request)
    {
        $item = Person::find($request->input);
        $param=[
            'input'=>$request->input,
            'item'=>$item
        ];
        return view('find', $param);
    }
}