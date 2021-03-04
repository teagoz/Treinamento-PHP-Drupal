<?php
function ehTriangulo($lado1, $lado2, $lado3)
{
    $lados = array($lado1, $lado2, $lado3);
    sort($lados);
    if ($lados[2] >= $lados[0] + $lados[1]) {
        return 'Nao eh um triangulo';
    }
    
    if ($lado1 == $lado2 && $lado1 == $lado3) {
        return  'Equilatero';
    } elseif ($lado1 == $lado2 && $lado1 != $lado3 || $lado1 == $lado3 && $lado1 != $lado2 || $lado3 == $lado2 && $lado3 != $lado1) {
        return 'Isosceles';
    } else {
        return 'Escaleno';
    }
}
echo ehTriangulo(3, 5, 4);
