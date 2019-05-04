<?php

class ProfesorTitular extends Profesor
{
    private $especialidad;

    public function __construct(string $nombre, string $apellido, int $antiguedad, int $profId, string $especialidad)
    {
        parent::__construct($nombre,$apellido,$antiguedad,$profId);
        $this->especialidad=$especialidad;
    }

    public function setEspecialidad($especialidad){
        $this->especialidad=$especialidad;
    }

    public function getEspecialidad():string{
        return $this->especialidad;
    }

 }
