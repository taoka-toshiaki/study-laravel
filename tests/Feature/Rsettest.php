<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Rsettest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/rest/create');

        $response->assertStatus(200);
    }
    public function testRoot()
    {
        $this->get('/')->assertStatus(200);
    }    
    public function testPosttest()
    {
        $response = $this->post('/rest',[
            "message"=>"test example.com",
            "url"=>"https://example.com"
        ]);
        $response->assertRedirect('/rest');
        $response = $this->post('/rest',[
            "message"=>"",
            "url"=>""
        ]);
        $response->assertStatus(500);        
    }
}
