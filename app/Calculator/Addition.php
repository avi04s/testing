<?php

    namespace App\Calculator;
    //use OperationInterface;

    use App\Calculator\Exceptions\NoOperandsException;

    class Addition extends OperationAbstract implements OperationInterface{

        public function calculate(){

            if( $this->operands == 0){

                throw new NoOperandsException;
            }

            return array_sum($this->operands);
        }


    }

?>