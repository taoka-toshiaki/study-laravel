<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index($id="noname",$pass="unknown",Request $request ,Response $response){
        $data =[
        "id"=>$id,
        "pass"=>$pass,
        'data1'=>$request->url()?$request->url():"",
        'data2'=>$request->fullUrl()?$request->fullUrl():"",
        'data3'=>$request->path()?$request->path():""
        ];
        return view("hello.index",$data);
    }
}
