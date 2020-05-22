<?php

namespace Dojo;

class Example
{
    public function contarLetras(int $numero)
    {
        $array = [
            1 => 'um',
            2 => 'dois',
            3 => 'tres',
            4 => 'quatro',
            5 => 'cinco',
            6 => 'seis',
            7 => 'sete',
            8 => 'oito',
            9 => 'nove',
            10 => 'dez',
            11 => 'onze'
        ];

        $length = 0;

        for($indice = 1; $indice <= $numero; $indice++) {
            $length += strlen($array[$indice]);
        }

        return $length;
    }
}