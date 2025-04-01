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

            ksort($this->productos, SORT_STRING | SORT_FLAG_CASE);
        }

        else if ($partes[0] === "vaciar") {
            $this->productos = []; // Se eliminan todos los productos
            return ""; // Lista vacía devuelve una cadena vacía
        }

        return $this->formatearLista();
    }

    private function formatearLista(): string {
        if (empty($this->productos)) {
            return "";
        }

        $resultados = [];
        foreach ($this->productos as $nombre => $cantidad) {
            $resultados[] = "$nombre x$cantidad";
        }
        return implode(", ", $resultados);
    }
}