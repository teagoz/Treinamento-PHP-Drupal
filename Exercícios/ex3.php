<?php
function converterTemp($grausC) 
{

    $grausF = $grausC * 1.8 + 32;
    return $grausF;
}

echo converterTemp(30);