<?php

namespace Deg540\CleanCodeKata9;


class ListaCompra
{
    private $productos =[];

    public function interpretarInstruccion(string $instruccion): string {
        $partes = explode(" ", $instruccion);

        if ($partes[0] === "añadir") {
            $nombre = strtolower($partes[1]);
            $cantidad = 1;
            $this->productos[$nombre] = $cantidad;

            return "$nombre x$cantidad";
        }

        return "";
    }
}