<?php

abstract class Profesor
{
    private $nombre;
    private $apellido;
    private $antiguedad;
    private $profId;

    public function __construct(string $nombre, string $apellido, int $antiguedad, int $profId)
    {
        $this->nombre=$nombre;
        $this->apellido = $apellido;
        $this->antiguedad=$antiguedad;
        $this->idProfesor=$profId;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
    public function setantiguedad($antiguedad){
        $this->antiguedad=$antiguedad;
    }
    
    public function setId($profId){
        $this->idProfesor=$profId;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getApellido():string{
        return $this->apellido;
    }

    public function getAntiguedad():int{
        return $this->antiguedad;
    }

    public function getId():int{
        return $this->idProfesor;
    }
}
