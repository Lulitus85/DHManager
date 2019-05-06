<?php

class DigitalHouseManager
{   
    private $listaAlumnos=array();
    private $listaProfesores=array();
    private $listaCursos=array();


/* 
    public function altaCurso(Curso $curso){
        $this->listaCursos[]=$curso; 
    }

    public function listarCurso(){
        $nombre="Cursos de DH>: ";
        foreach($this->listaCursos as $curso){
            $nombre .= "<br>".$curso->getCurso().", ".$curso->getId().", ".$curso->getCupo().";<br>";
        }
        return $nombre;

    }     
*/
   

    public function altaCurso(string $cursoNombre, int $cursoId, int $cupo)
    {
        $this->listaCursos[] = new Curso($cursoNombre, $cursoId, $cupo);
    }

 /*    public function setListaProfesores(int $pollo){
        $this->setantiguedad($pollo);
    } */

    public function altaProfesorAdj(string $nombre, string $apellido, int $profeId, int $horasDisponibles)
    {
        $this->listaProfesores[] = new ProfesorAdjunto($nombre, $apellido,  $profeId, $horasDisponibles);
    }

    //queremos armar un seteador de antiguedad desde el DHM

    public function getListaProfesores():array{
        return $this->listaProfesores;
    }

    public function setListaProfesores(array $pollito, int $pollo){
        foreach($this->listaProfesores as $profesor){
            $profesor->setantiguedad($pollo);
        }
    } 
    
    // si yo hago esto, funciona, pero cambia todas las antiguedad de todos los profesores dentro de la lista de profesores... por eso, lo de arriba, hay que acceder al array en la posicion en donde se quiere cambiar la antiguedad.
/*     public function setListaProfesores(int $pollo){
        foreach($this->listaProfesores as $profesor){
            $profesor->setantiguedad($pollo);
        }
    } 
  */


}
