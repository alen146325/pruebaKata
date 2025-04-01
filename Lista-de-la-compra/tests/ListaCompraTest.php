<?php

use PHPUnit\Framework\TestCase;

use Deg540\CleanCodeKata9\ListaCompra;


class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function testAñadirProducto() {
        $lista = new ListaCompra();
        $resultado = $lista->interpretarInstruccion("añadir pan");
        $this->assertEquals("pan x1", $resultado);
    }
}