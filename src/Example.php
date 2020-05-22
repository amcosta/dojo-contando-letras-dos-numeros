<?php

namespace Dojo;

class Example
{
    public function contarLetras(array $numeros)
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
            10 => 'dez'
        ];

        $length = 0;

        foreach($array as $key=>$string) {
            $length += strlen($string);
        }

        return $length;
    }
}