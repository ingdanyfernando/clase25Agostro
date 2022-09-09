<?php
include_once "conexion.php";


class Estudiante
{
    private $apellidos;
    private $nombre;
    private $direccion;
    private $telefono;

    /*public function __construct($ape,$nom,$dir,$tel)
    {
        $this->apellidos = $ape;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
    }*/

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
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaEstudiante.php");
    }
    public function ListarEstudiantes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from estudiantes");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Estudiantes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from estudiantes where idEstudiante=$id");
      return $resultado;
    }

    public function EditarEstudiante($id,$apel,$nom,$dir,$tel)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update estudiantes set apellidos="."'".$apel."',nombre="."'".$nom."',direccion="."'".$dir."',telefono="."'".$tel."'"." where idEstudiante = $id");
    }

}
