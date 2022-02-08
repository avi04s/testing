<?php

    namespace Tests\Feature;

    use Tests\TestCase;

    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use App\Models\Beverage;

    class BeverageTest extends TestCase {

        use DatabaseMigrations;
        

       /** @test */
        public function a_user_can_visit_a_beverage_page_and_see_beverages(){

            $beverage = Beverage::factory()->create();

            $response = $this->get('/beverage');

            $response->assertSee($beverage->name);

            $response->assertStatus(200);
        }

        /** @test */

        public function a_user_can_visit_a_single_beverage_page(){

            $beverage = Beverage::factory()->create();

            $response = $this->get('/beverage/'.$beverage->id);
            $response->assertSee($beverage->name);
            $response->assertStatus(200);
            
        }

    


    }

?>