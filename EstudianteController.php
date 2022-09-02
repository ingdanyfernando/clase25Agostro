<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();
$nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);