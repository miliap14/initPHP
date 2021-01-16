<?php

    //Formateo de datos

    //Alterar
    $text = "PHP es UN LENGUAJE, año 2020, programación";
    echo strtolower($text);//lo escribe todo en minúsucalas
    echo strtoupper($text);//lo escribe todo en mayúsucalas
    echo ucfirst($text);//Upper Camel
    echo lcfirst($text);//Lower Camel

    //Reemplazar
    $slug = str_replace(' ', '-', $text); //reemplazamos los espacios en blanco por guiones
    echo strtolower($slug);

    //Modificación
    $code = 39;
    echo str_pad($code, 8, '#', STR_PAD_BOTH); //Con esto decimos que $code debe tener 8 espacios y debe rellenar lo que falta con el símbolo #. El último parametro le indicamos que complete por los dos lados, pero puede completar por la izquierda o derecha.

    //Cuidado con las etiquetas
    //En nuestra base de datos no se deben de guardar etiquetas.
    //Con strip_tags eliminamos cualquier etiqueta html que contega el dato
    echo strip_tags($text);

    //Monobyte and Multibyte
    echo strtoupper($text); //en monobyte imprime con caracteres incorrectos
    echo mb_strtoupper($text); //en multibyte lo tenemos de forma correcta

?> 