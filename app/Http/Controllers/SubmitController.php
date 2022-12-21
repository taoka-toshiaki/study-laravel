<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    //
    public function post(Request $request)
    {
        $validate_rule = [
            'txt'=>'required',
            'mail'=>'email',
            'age'=>'numeric|between:0,99'
        ];
        $this->validate($request,$validate_rule);
        return view("welcome",['msg'=>'OK']);
    }
}
