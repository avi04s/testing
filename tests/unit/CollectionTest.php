<?php

    use PHPUnit\Framework\TestCase;
    use App\Support\Collection;


    class CollectionTest extends TestCase {

        /** @test */
        public function empty_instantiated_collection_return_no_items(){

            $collection = new Collection;
            $this->assertEmpty($collection->get());

        }

        /** @test */
        public function check_count_in_collection(){

            $collection = new Collection([
                'one', 'two', 'three'
            ]);

            $this->assertEquals(3, $collection->count());
        }
        /** @test */
        public function items_returned_matched_items_passed_in(){
            $collection = new Collection([
                'one', 'two'
            ]);

            $this->assertCount(2, $collection->get());
            $this->assertEquals($collection->get()[0],'one');
            $this->assertEquals($collection->get()[1],'two');
        }
         /** @test */
        public function collection_is_instance_of_iterator_aggregate(){

            $collection = new Collection();
            $this->assertInstanceOf(IteratorAggregate::class, $collection);

        }

        /** @test  */
        public function collection_can_be_iterated(){

            $collection = new Collection([
                'one','two','three'
            ]);

            $items = [];

            foreach($collection as $item) {
                $items[] = $item;
            }

            $this->assertCount(3, $items);
            $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
            
        }

        /** @test */

        public function collection_can_be_meraged_with_another_collection(){

            $collection1 = new Collection(['one','two']);
            $collection2 = new Collection(['three','four','five']);

            //$newCollection = $collection1->merge($collection2);
            $collection1->merge($collection2);

            $this->assertCount(5, $collection1->get());
            $this->assertEquals(5,$collection1->count());
        }

        /** @test */
        public function can_add_to_existing_collection(){

            $collection = new Collection(['one','two']);
            $collection->add(['three']);


            $this->assertEquals(3, $collection->count());
            $this->assertCount(3, $collection->get() );
        }
        
        /** @test */
        public function return_json_encode_items(){

            $collection = new Collection([
                ['username' => 'alex'],
                ['username' => 'garry'],
            ]);
            $this->assertEquals('[{"username":"alex"},{"username":"garry"}]', $collection->toJson() );
        }


        /** @test */
        public function json_encoding_a_collection_object_returns_json(){

            $collection = new Collection([
                ['username' => 'alex'],
                ['username' => 'billy'],
            ]);

            $encoded = json_encode($collection);

            $this->assertEquals('[{"username":"alex"},{"username":"billy"}]', $encoded );


        }





    }


?>