<?php

class Alumno
{
    private $nombre; //si yo lo pongo public no necesito hacer los setters y los getters, solamente accediendo a la variable puedo obtenerlo o cambiarlo
    private $apellido;
    private $alumnoId;

    public function __construct(string $nombre,string $apellido,int $alumnoId)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alumno = $alumnoId;
    }
  // no se puede declarar así por: 1)cada funcion tiene que tener un nombre diferente, 2) es mejor hacerlo por separado, proque si solo quiero el apellido, tengo que armar un filtro zarpado.
  //  public function set(string $nombre, string $apellido){
  //      $this->nombre=$nombre;
  //      $this->apellido=$apellido;
  //  }

  //  public function get($nombre, $apellido){
  //      return $this->nombre . " " . $this->apellido;
  //  }

  //  public function set(int $alumnoId){
  //      $this->alumno=$alumnoId;
  //  }

  //  public function get($alumnoId){
  //      return $this->alumno;
  //  }
      
      public function setNombre($nombre){
          $this->nombre=$nombre;
      }
    
      public function setApellido($apellido){
          $this->apellido=$apellido;
      }

      public function setId($alumnoId){
          $this->alumno=$alumnoId;
      }

      public function getNombre():string{
          return $this->nombre;
      }

      public function getApellido():string{
        return $this->apellido;
    }
    
      public function getId():int{
        return $this->alumno;
    }
}