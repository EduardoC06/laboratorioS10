<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
        echo "Apellidos: "; echo $_POST['apellidos']; echo "<br/>";
        echo "E-mail: "; echo $_POST['correo']; echo "<br/>";
        echo "Genero: "; echo $_POST['sexo']; echo "<br/>";
        echo "Estado civil: "; echo $_POST['estado']; echo "<br/>";
        echo "Comentario "; echo $_POST['comentario']; echo "<br/>"        
    ?>
</body>
</html>