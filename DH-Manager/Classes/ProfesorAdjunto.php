<?php

class ProfesorAdjunto extends Profesor
{
    private $horasConsultas;

    public function __construct(string $nombre, string $apellido, int $antiguedad, int $profId, int $horasDisponibles)
    {
        parent::__construct($nombre,$apellido,$antiguedad,$profId);
        $this->horasConsultas=$horasDisponibles; //cuando lo construya va a poner siempre por default el atributo de la clase hija
    }

    public function setHoras($horasConsultas){
        $this->horasDisponibles=$horasConsultas;
    }

    public function getHoras():int{
        return $this->horasDisponibles;
    }
}
