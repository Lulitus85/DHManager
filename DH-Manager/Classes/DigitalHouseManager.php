<?php

class DigitalHouseManager
{   
    private $listaAlumnos=array();
    private $listaProfesores=array();
    private $listaCursos=array();



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



}
