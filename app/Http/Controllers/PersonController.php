<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = null;
        $item = null;
        
        if(isset($request->id)){
            // $item = Person::find(((int)$request->id));
            $items = Person::nameA('a')->orwhere('mail','like','%gmail%')->orderBy('id','desc')->get();
        }else{
            $items = Person::all();
        }
        
        return view('person.index',["items"=>$items,'person'=>$item]);
    }
}
