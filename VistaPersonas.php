<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h2>INGRESO DE PERSONAS</h2>
    </p>
    
    <form action="PersonaController.php" method="post">
        
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">

        <p>
            <label for="municipio">Seleccione el municipio de Residencia</label>
           <select name="municipio" >
            <option value="Huehuetenango">Huehuetenango</option>
            <option value="Chiantla">Chiantla</option>
            <option value="Malacatancito">Malacatancito</option>
           </select> 
        </p>

        <p>
            <label for="sexo">Selecciones el Sexo</label>
            <input type="radio" value="Masculino" name="sexo">
            <label for="Masculino">Masculino</label>
            <input type="radio" value="Femenino" name="sexo">
            <label for="Femenimo">Femenino</label>
        </p>

        <p>
            <input type="submit" value="Enviar Datos">
        </p>
    </form>
</body>
</html>