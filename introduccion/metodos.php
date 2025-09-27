<?php
class Operaciones
{
    function sumar(...$valores)
    {
        $rst = 0;
        foreach ($valores as $val) {
            $rst += $val;
        }
        return $rst;
    }

    function multiplicar($factorA, $factorB){
        return $factorA * $factorB;
    }

    function dividir($dividendo, $divisor){
        if($divisor == 0){
            return 'No se puede dividir por cero';
        }
        return $dividendo / $divisor;
    }
}
?>