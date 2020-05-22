<?php
​
namespace Dojo;
​
class Example
{
    private $dezenas = [
        2 => 'vinte',
        3 => 'trinta',
        4 => 'quarenta',
        5 => 'cinquenta',
        6 => 'sessenta',
        7 => 'setenta',
        8 => 'oitenta',
        9 => 'noventa'
    ];

    private $unidades = [
        1 => 'um',
        2 => 'dois',
        3 => 'tres',
        4 => 'quatro',
        5 => 'cinco',
        6 => 'seis',
        7 => 'sete',
        8 => 'oito',
        9 => 'nove',
    ];

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
            11 => 'onze',
            12 => 'doze',
            13 => 'treze'
        ];
        ​
        $unidades = [
            'um',
            'dois',
            'tres',
            'quatro',
            'cinco',
            'seis',
            'sete',
            'oito',
            'nove',
            'dez'
        ];
​
        $onzeaovinte = [
            'onze',
            'doze',
            'treze',
            'quatorze',
            'quinze',
            'dezesseis',
            'dezessete',
            'dezoito',
            'dezenove'
        ];
​
        $length = 0;
​
        for ($indice = 1; $indice <= $numero; $indice++) {
            $length += $this->getLength($indice);
        }
​
        return $length;
    }
​
    private function getLength(int $numero) {
        $length = 0;
        $str_numero = str_split($numero); # [ '2', '3']
        ​
         if (count($str_numero) == 1) {
             $length += $this->dezenas[$str_numero[0]];
         }

        if (count($str_numero) == 2) {
            $length += $this->dezenas[$str_numero[0]];
            $length += $this->unidades[$str_numero[1]];
        }

        return $length;
    }
}
