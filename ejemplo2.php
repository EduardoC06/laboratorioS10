<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de datos</h1>
    <form action="datos.php" method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
            </tr>

            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="apellidos"></td>
            </tr>

            <tr>
                <td>Correo</td>
                <td><input type="email" name="correo"></td>
            </tr>

            <tr>
                <td>Genero</td>
                <td>
                    <input type="radio" name="sexo" value="V"/> Varon<br/>
                    <input type="radio" name="sexo" value="M"/> Mujer
                </td>
            </tr>

            <tr>
                <td>Estado civil</td>
                <td><select name="estado">
                    <option value="">solteros</option>
                    <option value="Casado">casados</option>
                    <option value="Viudo">viudo</option>
                    <option value="Diverciado">divorciados</option>
                </select>
                </td>
            </tr>

        </table>
        <p>Comentario</p>
        <textarea name="comentario" cols="50" rows="5"></textarea>
        <p><input type="submit" value="Comprobar el formulario">
    <input type="reset" value="borrar todo"></p>
    </form>

    
</body>
</html>