<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index($id="noname",$pass="unknown",Request $request ,Response $response){
        $data =[
        'id'=>$id,
        'pass'=>$pass,
        'data'=>['QA1','QA2','QA3','QA4','QA5','QA6','QA7','QA8','QA9'],
        'data1'=>$request->url()?$request->url():"",
        'data2'=>$request->fullUrl()?$request->fullUrl():"",
        'data3'=>$request->path()?$request->path():""
        ];
        return view("hello.index",$data);
    }
    public function post($id="nomame",$pass="unknown",Request $request){
        $data = [
            'id'=>$id,
            'pass'=>$pass,
            'txt'=>$request->txt,
            'data'=>['QA1','QA2','QA3','QA4','QA5','QA6','QA7','QA8','QA9']
        ];
        return view("hello.index",$data);
    }
}
