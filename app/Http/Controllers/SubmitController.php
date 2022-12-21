<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\HelloRequest;

class SubmitController extends Controller
{
    //
    public function post(HelloRequest $request)
    {
        // $validate_rule = [
        //     'txt'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric|between:0,99'
        // ];
        // $this->validate($request,$validate_rule);
        return view("welcome",['msg'=>'ok']);
    }
}
