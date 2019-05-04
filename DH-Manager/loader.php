<?php


function dump($pollo){
    echo"<pre>";
    (var_dump($pollo));
    echo"<pre>";
}
function dd($pollo)
{
    echo '<pre>';
    die(var_dump($pollo)); //sacar el die si quiero ver todo el columna
    //echo '<pre>';
}

require 'Classes/Alumno.php';
require 'Classes/Curso.php';
require 'Classes/Profesor.php';
require 'Classes/ProfesorTitular.php';
require 'Classes/ProfesorAdjunto.php';
require 'Classes/DigitalHouseManager.php';

/**
 * 
 * No testear aca, hacer las pruebas en tests.php
 * -----------------------------------------------
 * 
 */