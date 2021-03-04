<?php
function media()
{
    $num = func_get_args();
    $qtd_nums = func_num_args();
    $soma = 0;
    $media = 0;
    
    foreach ($num as $n) {

        $soma += $n;
    }
    
    $media = $soma / $qtd_nums;
    
    return $media;

}
    
    echo media(1, 2, 3, 4, 5, 24);