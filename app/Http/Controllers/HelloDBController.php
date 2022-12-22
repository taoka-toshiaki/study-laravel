<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HelloDBController extends Controller
{
    //
    public function index(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }

        return view('hello.db', ['items' => $items]);
    }

    public function addindex(Request $request)
    {
        return view('hello.add');
    }
    public function addpost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'numeric|unique:people,id',
            'name' => 'filled',
            'mail' => 'email',
            'age' => 'filled|numeric|between:0,999'
        ]);
        if ($validator->fails()) {
            return redirect('/db/add')->withErrors($validator)->withInput($request->all());
        }
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age
        ];
        DB::insert('insert into people (id,name,mail,age) values (:id,:name,:mail,:age)', $param);
        return redirect()->to("/db");
    }
}
