<?php

    use PHPUnit\Framework\TestCase;
    use App\Models\User;
    class UserTest extends TestCase {

        // test to match first name of user
        public function test_that_we_can_get_first_name() {

            //$user = new \App\Models\User;
            $user = new User();

            $user->setFirstName('Billy');

            $this->assertEquals($user->getFirstName(), 'Billy');

        }

        // test to match last name of user
        public function test_that_we_can_get_last_name(){

            //$user = new \App\Models\User;
            $user = new User();
            $user->setLastName('Garret');

            $this->assertEquals($user->getLastName(), 'Garret');

        }

        // test to match full name of user

        public function test_user_full_name(){

            $user = new User();

            $user->setFirstName('Rahul');
            $user->setLastName('Das');

            $this->assertEquals($user->getFullName(), 'Rahul Das');

        }

        // test to check extra space are trimmed or not

        public function test_firs_and_last_name_trimmed(){

            $user = new User();

            $user->setFirstName('Rahul            ');
            $user->setLastName('              Das');

            $this->assertEquals($user->getFirstName(), 'Rahul');
            $this->assertEquals($user->getLastName(), 'Das');

        }

        // test to check user has email or not
        public function testEmailAddresscanBeSet(){

            $user = new User();

            $user->setEmail('test@gmail.com');
            $this->assertEquals($user->getEmail(), 'test@gmail.com');

        }

        public function testEmailVariableCorrectValues(){

            $user = new User();
            $user->setFirstName('Abhijit');
            $user->setlastName('Paul');
            $user->setEmail('amitepaul@gmail.com');

            $emailVariables = $user->getEmailVariables();

            $this->assertArrayHasKey('full_name', $emailVariables);
            $this->assertArrayHasKey('email' ,$emailVariables);

            $this->assertEquals($emailVariables['full_name'], 'Abhijit Paul');
            $this->assertEquals($emailVariables['email'], 'amitepaul@gmail.com');




        }


      


    }

?>