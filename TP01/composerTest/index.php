<?php

require_once'./php/pais.php';


$paises ) Pais:: ObtenerPaises();
$pais = Pais:: PaisPorNombre("Argentina");

foreach ($paises as $key => $value) 
{
    $value->Mostrar();
}