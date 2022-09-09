<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
</head>
<body>
    <form action="EstudianteController.php" method="POST">
                        <?php
                            include_once "EstudianteModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtapellidos">Apellidos:</label>
                                <input type="text" name="txtapellidos" 
                                value="<?php echo $resultadoFiltrado['apellidos']?>">
                                </p>

                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>">
                                </p>

                                <p>
                                <label for="txtdireccion">Direccion:</label>
                                <input type="text" name="txtdireccion" 
                                value="<?php echo $resultadoFiltrado['direccion']?>">
                                </p>

                                <p>
                                <label for="txttelefono">Telefono:</label>
                                <input type="text" name="txttelefono" 
                                value="<?php echo $resultadoFiltrado['telefono']?>">
                                </p>

                                 <p>
                                    <input type="hidden" name="idStudent" 
                                    value="<?php echo $resultadoFiltrado['idEstudiante']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Editar Estudiante" name="btnEditar">            
    </form>
</body>
</html>