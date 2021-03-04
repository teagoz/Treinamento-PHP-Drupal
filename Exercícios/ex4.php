<?php
function converterMParaCm($emMetros) 
{

    $emCent = $emMetros * 100;
    return $emCent;
}

echo converterMParaCm(50);