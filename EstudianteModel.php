<?php
include_once "conexion.php";


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
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into estudiantes (apellidos,nombre,direccion,telefono) values ("."'".$_POST['apellidos']."','".$_POST['nombre']."','".$_POST['direccion']."','".$_POST['telefono']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       echo "Registro agregado exitosamente";
    }
}
