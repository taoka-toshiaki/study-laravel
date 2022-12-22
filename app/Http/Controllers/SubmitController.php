<?php

namespace App\Http\Controllers;

// use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Cookie;
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
        $cookie = 'クッキーはないよ';
        if($request->hasCookie('msg')){
            $cookie = 'クッキーはあるよ🍪';
        }        
        Cookie::queue('msg',$cookie,99);
        return view('welcome',['msg'=>$msg,'cookie'=>$cookie]);
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
            'txt'=>'tt',
            'mail'=>'email',
            'age'=>'numeric'
        ],[
            'txt.tt'=>'taokaですか？',
        ]);
        // $validator->sometimes('txt','required',function($input){
        //     return strcmp($input->txt,'taoka');
        // });        
        if($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }
        $cookie = 'クッキーはないよ';
        if($request->hasCookie('msg')){
            $cookie = 'クッキーはあるよ🍪';
        }
        Cookie::queue('msg',$cookie,99);

        return view("welcome",['msg'=>'ok','cookie'=>$cookie]);
    }
}
