<?php

class ProfesorAdjunto extends Profesor
{
    private $horasConsultas;

    public function __construct(string $nombre, string $apellido, int $profId, int $horasDisponibles)
    {
        parent::__construct($nombre,$apellido,$profId);
        $this->horasConsultas=$horasDisponibles; //cuando lo construya va a poner siempre por default el atributo de la clase hija
    }

    public function setHoras($horasConsultas){
        $this->horasDisponibles=$horasConsultas;
    }

    public function getHoras():int{
        return $this->horasDisponibles;
    }
}
