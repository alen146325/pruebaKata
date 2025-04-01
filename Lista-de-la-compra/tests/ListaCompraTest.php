<?php

use PHPUnit\Framework\TestCase;

use Deg540\CleanCodeKata9\ListaCompra;


class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function dadoOpcionAnadirSinCantidadDevolverUno() {
        $lista = new ListaCompra();
        $resultado = $lista->interpretarInstruccion("añadir pan");
        $this->assertEquals("pan x1", $resultado);
    }

    /**
     * @test
     */
    public function dadoOpcionAnadirConCantidadDevolverCantidadCorrecta() {
        $lista = new ListaCompra();
        $resultado = $lista->interpretarInstruccion("añadir pan 2");
        $this->assertEquals("pan x2", $resultado);
    }

    /**
     * @test
     */
    public function dadoOpcionAnadirSumarCantidadCorrecta() {
        $lista = new ListaCompra();
        $lista->interpretarInstruccion("añadir pan 2");
        $resultado = $lista->interpretarInstruccion("añadir pan 3");
        $this->assertEquals("pan x5", $resultado);
    }
}