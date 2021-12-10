<?php 
    /**
     * @covers ::get
     */
    class APITest extends \PHPUnit\Framework\TestCase{

        
        /** @test **/
        public function Prueba_endpoint_productos() {
            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'http://localhost/onfeetgl/resources/products/get-products.php');
            $data=json_decode($res->getBody(), true);
            $this->assertArrayHasKey('data', $data);
            $this->assertEquals(200, $res->getStatusCode());
            // echo "CODE STATUS: ".$res->getStatusCode(); 
        }
    }
?>