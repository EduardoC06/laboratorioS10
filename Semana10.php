<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define('saludo', "Hola a todos");
    echo saludo."<br>";
    define('colores', array('rojo', 'verde', 'azul'));
    echo colores[1]."<br>";

    const val=24;
    echo val."<br>";
    const paises=array('Perú', 'Argentina', 'Mexico');
    echo paises[0];
    ?>
    
</body>
</html>