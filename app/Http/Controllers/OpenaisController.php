<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("openai.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
    }
    /**
     * Display the specified resource.
     * 
     */
    public function openaishow(Request $request)
    {
        $text = "";
        if($request->input("text")){

            $API_KEY = env("OPEN_AI_API");

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $API_KEY
            );
    
            $data = array(
                'model' => 'text-davinci-003',
                'prompt' =>$request->input("text") ,
                "max_tokens" => 150,
                "temperature" => 1,
                "top_p" => 1,
                "frequency_penalty" => 0.0,
                "presence_penalty" => 0.6,
                "stop" => array(" Human:", " AI:")
            );
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
    
            $response_data = json_decode($response, true);
            $text = trim($response_data['choices'][0]['text']);
        }
        return view("openai.index", ["result" =>$text]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
