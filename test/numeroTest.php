<?php

use PHPUnit\Framework\TestCase; // <= También esta.
include './src/Numero.php'; //Importante esta linea.

class numeroTest extends TestCase {

    public function testDecremento() {
       
        $objeto = new Numero(100, 'positivo');
        $this->assertEquals(99, $objeto->decremento());

    }

    public function testDecremento2() {
       
        $objeto = new Numero(0, 'positivo');
                                    //Función testeada
        $this->assertEquals(-1, $objeto->decremento());
                        //   ^Estado esperado
        $this->assertEquals('negativo', $objeto->estado);
    }

    
}


?>