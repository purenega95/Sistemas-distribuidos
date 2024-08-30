<?php
    /* error_reporting(0); */
    include('conexion.php');

    $nit = $_POST['nit'];
    $nom = $_POST['nom'];
    $dir = $_POST['dir'];
    $bar = $_POST['bar'];
    $tel = $_POST['tel'];

    $sql="INSERT INTO `empresas`(`nit`, `nombre_emp`, `direccion`, `barrio`, `telefono`) 
                 VALUES ('$nit','$nom','$dir','$bar','$tel')";
                 
    $result=mysqli_query($conexion,$sql);

    if($result){
        header('Location: empresas.php');
    }
    else{
        echo("algo paso jajaja");
    }

    
?>