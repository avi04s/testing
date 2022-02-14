<?php


    use PHPUnit\Framework\TestCase;
    use App\Config\Database;

    class DatabaseConnectionTest extends TestCase {

        // Test to check database connection
        /** @test */
        public function database_connection(){

            $db = new Database();
            $con = $db->getConnection();

            $this->assertIsBool($con);
            
        }
    }

?>