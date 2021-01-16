<?php

    //Expresiones regulares
    //Toda expresión regular tiene un contedor: / /
    //Inicio: ^
    //Fin: $
    //Rangos: -
    //Patrón: []
    //Condición: {}

    $password = '1233456';

    var_dump( (bool)preg_match('/^[0-9]{6,9}$/', $password));
    //Quiero un patron que sean solo numeros que vayan del 0 al nuevo y como condición que tenga como mínimo 6 valores y como máximo 9.

?>