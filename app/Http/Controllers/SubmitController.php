<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class SubmitController extends Controller
{
    //
    public function post(Request $request)
    {
        // $validate_rule = [
        //     'txt'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric|between:0,99'
        // ];
        // $this->validate($request,$validate_rule);
        $validator = Validator::make($request->all(),[
            'txt'=>'required',
            'mail'=>'email',
            'age'=>'numeric|between:0,99'
        ]);
        if($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }
        return view("welcome",['msg'=>'ok']);
    }
}
