<?php

namespace Deg540\CleanCodeKata9;


class ListaCompra
{
    private $productos =[];

    public function interpretarInstruccion(string $instruccion): string {
        $partes = explode(" ", $instruccion);

        if ($partes[0] === "añadir") {
            $nombre = strtolower($partes[1]);
            $cantidad = isset($partes[2]) ? (int)$partes[2] : 1;

            if (isset($this->productos[$nombre])) {
                $this->productos[$nombre] += $cantidad;
            } else {
                $this->productos[$nombre] = $cantidad;
            }

            return "$nombre x" . $this->productos[$nombre];
        }

        return "";
    }
}