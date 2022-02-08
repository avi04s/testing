<?php

    use PHPUnit\Framework\TestCase;


    class FirstTest extends TestCase{

        /** @test */
        public function Multiplication_Of_TwoNumber(){

            $a = 5;
            $b = 4;

            $c = $a * $b;
            //$this->assertTrue(true);
            $this->assertEquals($c, 20);
            
        }


    }

?>