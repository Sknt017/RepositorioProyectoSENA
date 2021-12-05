<?php 
    class PruebaTest extends \PHPUnit\Framework\TestCase{

        /** @test **/
        public function esta_funcionando_PHPUnit() {
            $res = 2 + 2;
            $this->assertEquals(4, $res);
        }
    }
?>