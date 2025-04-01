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

    /**
     * @test
     */
    public function dadoListaNuevaDevolverCadenaVacia() {
        $lista = new ListaCompra();
        $resultado = $lista->interpretarInstruccion("");
        $this->assertEquals("", $resultado);
    }

    /**
     * @test
     */
    public function dadoMultiplesProductosDevolverOrdenAlfabetico() {
        $lista = new ListaCompra();
        $lista->interpretarInstruccion("añadir Pan");
        $lista->interpretarInstruccion("añadir manzana");
        $lista->interpretarInstruccion("añadir leche");
        $resultado = $lista->interpretarInstruccion("");
        $this->assertEquals("leche x1, manzana x1, pan x1", $resultado);
    }

    /**
     * @test
     */
    public function dadoProductosConMayusculaOMinusculaDanSumaCorrecta() {
        $lista = new ListaCompra();
        $lista->interpretarInstruccion("añadir Pan");
        $lista->interpretarInstruccion("añadir pan 2");
        $resultado = $lista->interpretarInstruccion("");
        $this->assertEquals("pan x3", $resultado);
    }

    /**
     * @test
     */
    public function dadoInstruccionVaciarEliminarTodosLosProductos() {
        $lista = new ListaCompra();
        $lista->interpretarInstruccion("añadir pan 2");
        $lista->interpretarInstruccion("añadir leche 1");
        $resultado = $lista->interpretarInstruccion("vaciar");
        $this->assertEquals("", $resultado); // La lista debe quedar vacía
    }


}