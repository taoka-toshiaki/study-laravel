<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;


class SubmitController extends Controller
{
    
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(),[
            'id'=>'required',
            'pass'=>'required'
        ]);

        
        if($validator->fails()){
            $msg = 'パラメーターに問題有り';
        }else{
            $msg = 'パラメーターOK';
        }
        return view('welcome',['msg'=>$msg]);
    }


    public function post(Request $request)
    {
        // $validate_rule = [
        //     'txt'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric|between:0,99'
        // ];
        // $this->validate($request,$validate_rule);
        $validator = Validator::make($request->all(),[
            'txt'=>'taoka',
            'mail'=>'email',
            'age'=>'numeric'
        ],[
            'txt.taoka'=>'taokaですか？',
        ]);
        // $validator->sometimes('txt','required',function($input){
        //     return strcmp($input->txt,'taoka');
        // });        
        if($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }
        return view("welcome",['msg'=>'ok']);
    }
}
