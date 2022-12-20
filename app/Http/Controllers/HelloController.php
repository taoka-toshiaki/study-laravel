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
        'data'=>['Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9'],
        'data1'=>$request->url()?$request->url():"",
        'data2'=>$request->fullUrl()?$request->fullUrl():"",
        'data3'=>$request->path()?$request->path():"",
        'data4'=>['name1'=>'Q1','name2'=>'Q2','name3'=>'Q3','name4'=>'Q4','name5'=>'Q5','name6'=>'Q6','name7'=>'Q7','name8'=>'Q8','name9'=>'Q9']
        ];
        return view("hello.index",$data);
    }
    public function post($id="nomame",$pass="unknown",Request $request){
        $data = [
            'id'=>$id,
            'pass'=>$pass,
            'txt'=>$request->txt,
            'data'=>['Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9'],
            'data4'=>['name1'=>'Q1','name2'=>'Q2','name3'=>'Q3','name4'=>'Q4','name5'=>'Q5','name6'=>'Q6','name7'=>'Q7','name8'=>'Q8','name9'=>'Q9']
    
        ];
        return view("hello.index",$data);
    }
    
    public function test(Request $request)
    {
        return view('hello.test',['data'=>$request->data]);
    }
}
