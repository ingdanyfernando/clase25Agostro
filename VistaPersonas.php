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
    
    <form action="">
        
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
            <label for="sexto">Selecciones el Sexo</label>
            <input type="radio" value="Masculino" name="sexo">
            <input type="radio" value="Femenino" name="sexo">
        </p>
    </form>
</body>
</html>