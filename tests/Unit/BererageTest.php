<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Beverage;
use App\Models\User;
use App\Exceptions\MinorCanntBuyAlcoholicException;

class BererageTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    /*public function test_example()
    {
        $this->assertTrue(true);
    }*/

    /** @test */
    public function beverage_has_name(){

       // $beverage = factory(Beverage::class)->make();
        $beverage = Beverage::factory()->make();

      //  $beverage = Beverage::factory()->count(1)->create();

        $name = $beverage;
     //  $name = 'abc';

        $this->assertNotEmpty($name);
        
    }

    
    /** @test */
    public function a_minor_user_can_not_buy_alcoholic_beverage(){
        
        $beverage = Beverage::factory()->make([
            'type' => 'Alcoholic'
        ]);

        $user = User::factory()->make([
            'age' => '17'
        ]);

        $this->actingAs($user);

        $this->expectException(MinorCanntBuyAlcoholicException::class);

        $beverage->buy();

    }
}
