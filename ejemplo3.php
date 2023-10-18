<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $suma="";
        if(isset($_POST['submit'])){
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $suma=$n1+$n2;
        }        
    ?>

    <form method="post">
        <h1>Sumas</h1>
        <label for="">Numero 1: </label>
        <input type="text" name="n1" value="<?php if(isset($n1)) echo $n1; ?> "><br>
        <label for="">Numero 2: </label> 
        <input type="text" name="n2" value="<?php if(isset($n2)) echo $n2; ?> "><br>
        <label for="">Suma: </label>
        <input type="suma" value="<?=$suma?>"><br>
        <input type="submit" value="Aceptar" name="submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>