<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\User;


use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserModelTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function user_has_full_name_aatribute()
    {

        $user = \App\Models\User::create([
            'firstname'=>'Abhijit',
            'lastname' => 'Paul',
            'email' => 'amitepaul@gmail.com',
            'password' => '12345678',
            'age' =>'17'
            //'confirm_password' =>'12345678'
        ]);

        //$this->assertTrue(true);
        $this->assertEquals('Abhijit Paul',$user->fullname);
    }

    /** @test */
    public function user_has_age_attribute(){


        $user = User::factory()->make();
        $this->assertNotNull($user->age);
    }
}
