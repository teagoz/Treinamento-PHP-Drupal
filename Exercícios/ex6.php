<?php
function diaDaSemana($num)
{
    $dias = array('Domingo','Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');

    if ($num > 7 || $num < 1) {
        return 'Valor invalido';
    } else {
        return $dias[$num-1];
    }
     
}

echo diaDaSemana(7);
echo diaDaSemana(0);