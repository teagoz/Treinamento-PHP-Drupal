<?php
function maiorMenor()
{
    $res = array();
    $nums = func_get_args();
    
    $res[] = min($nums);
    $res[] = max($nums);
    return $res;
}
    
    $val = maiorMenor(1, 2, 3, 4, 5, 24);
    
    echo 'Menor: '.$val[0].' Maior: '.$val[1];