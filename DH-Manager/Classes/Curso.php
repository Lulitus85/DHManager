<?php

class Curso
{
    private $cursoNombre;
    private $cursoId;
    private $profesorTitular;
    private $profesorAdjunto;
    private $cupo;
    private $lista = array(); //No lo pongo en el constructor porque la lista de alumnos viene despues. El curso se arma y luego se suman alumnos, hasta completar el $cupo preestablecido

    public function __construct(string $cursoNombre, int $cursoId, int $cupo)
    {
        $this->cursoNombre=$cursoNombre; //en el espacio reservado para nombreCurso igualamelo al parametro que pase cuando lo instancie en el lugar de $cursoNombre)
        $this->cursoId=$cursoId;
        /* $this->profesorTitular=$profesorTitular;
        $this->profesorAdjunto=$profesorAdjunto; */
        $this->cupo=$cupo;
    }

    public function setCurso($cursoNombre){
        $this->cursoNombre=$cursoNombre;
    }
    //si no fuese privado, no es necesario el set ni el get.
    // Si es publico puedo cambiarlo (setearlo) asi: $this->nombreCurso="hola"; (si es un string)  
    // Si es publico puedo llamarlo (get) asi: $this->nombreCurso;

    public function getCurso():string{
        return $this->cursoNombre;
    }

    public function setId($cursoId){
        $this->cursoId=$cursoId;
    }

    public function getId():int{
        return $this->cursoId;
    }

    public function setAlumnos(Alumno $alumno){
        $this->lista[]=$alumno; //que agregue a ese array un alumno
    }

    public function listar(){
        $lista="Alumnos: ";
        foreach($this->lista as $alumno){ //esta llamando la key del array que se seteó arriba (setAlumnos). 
            $lista .= "<br>".$alumno->getApellido() . ", " . $alumno->getNombre() . ";"; //esta llamando al getNombre del objeto de tipo $alumno.
        }
        return $lista;
    }

    public function setProfTit($profesorTitular){
        $this->profesorTitular=$profesorTitular;
    }

    public function getProfTit():ProfesorTitular{
        return $this->profesorTitular;
    }

    public function setProfAdj($profesorAdjunto){
        $this->profesorAdjunto=$profesorAdjunto;
    }

    public function getProfAdj():ProfesorAdjunto{
        return $this->profesorAdjunto;
    }


    public function Profesores(){
        $profesorTitular=$this->getProfTit();
        $profesorAdjunto=$this->getProfAdj();

        $Profes="El profesor titular será " . $profesorTitular->getNombre()." ".$profesorTitular->getApellido().", quien estará acompañado del profesor adjunto " . $profesorAdjunto-> getNombre()." ".$profesorAdjunto->getApellido();
        return $Profes;
    }  //igualo las variables a los objetos que le pasé alc onstructor de la clase Curso.
    // Una vez que hice esto, usé el getNombre de ese OBJETO (por ejemplo, el de $profesorTitular, lo va a ir a buscar a la clase, pero al no encontrarlo va a ir al padre (Profesor) )


    public function agregarUnAlumno(Alumno $alumno){ 
        if(count($this->lista)<$this->cupo){
            $this->setAlumnos($alumno);
            return true;
        }
         return false;
    }

    public function setCupo($cupo){
        $this->cupo=$cupo;
    }

    public function getCupo():ProfesorTitular{
        return $this->cupo;
    }



}


