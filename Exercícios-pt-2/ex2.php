<?php
function valid_cpf($cpf)
{
    //Remove tudo que nao seja numero
    $cpfclean = preg_replace('/\D/', '', $cpf);

    //verifica se tem 11 caracteres
    if (strlen($cpfclean) != 11) {
        return false;
    } 

    //transforma em array
    $cpfarray = str_split($cpfclean);

    //confere se nao sao todos iguais
    foreach ($cpfarray as $num) {
        $i = 1;
        if ($cpfarray[$i] != $num) {
            break;
        } else {
            return false;
        }
        $i += 1;
    }

    //testa a logica do cpf
    $loops = [9,10];
    foreach ($loops as $item) {
        
        $soma = 0;
        $num_multiplica = $item + 1;

        for ($i = 0; $i < $item; $i++) {

            $soma += $cpfarray[$i] * ($num_multiplica--); 

        }

        $resultado = (($soma * 10) % 11);

        if ($cpfarray[$item] != $resultado) {
            return false;
        };
    }

    return true;
}