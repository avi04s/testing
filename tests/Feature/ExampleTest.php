<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */

   public function test_example()
    {
        $response = $this->get('/');

       // $response->assertStatus(200);

       $response->assertSeeInOrder(['Laravel','Documentation']);


    }

    
    /** @test */

    public function about_route_return_something(){

        $response = $this->get('/about');

       // dd($response);

      //  $response->assertStatus(200);

      $response->assertSee('about');
        
    }


}
