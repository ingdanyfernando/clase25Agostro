<?php
class Estudiante
{
    private $apellidos;
    private $nombre;
    private $direccion;
    private $telefono;

    public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }

    public function GuardarEstudiante($ape,$nom,$dir,$tel)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       
    }
}
