<?php
    /* error_reporting(0); */
    include('conexion.php');

    $ced = $_POST['ced'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $cel = $_POST['cel'];
    $cor = $_POST['cor'];

    $sql="INSERT INTO `clientes`(`cedula`, `nombre`, `apellido`, `celular`, `correo`) 
                 VALUES ('$ced','$nom','$ape','$cel','$cor')";
                 
    $result=mysqli_query($conexion,$sql);

    if($result){
        header('Location: index.php');
    }
    else{
        echo("algo paso jajaja");
    }

    
?>