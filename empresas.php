<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.CSS">
    <title>Formulario Empresas</title>
    <script src="https://kit.fontawesome.com/f959a384d4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="nav">
        <section class="back"> 
            <button class="btn11" onclick="location.href='index.html'"><i class="fas fa-solid fa-arrow-left"></i></button>
        </section>

        <section class="btns">
            <button class="btn1" onclick="location.href='clientes.php'">CLIENTES</button>
            <button class="btn1" onclick="location.href='empresas.php'">EMPRESAS</button>
        </section>
    
      
    </div>
    <div class="container">

        <section class="container-form">
            <form action="insertar_empresa.php" method="post">
                <h1>FORMULARIO PARA EMPRESAS</h1>
                <input name="nit" type="number" placeholder="Nit" required>
                <input name="nom" type="text" placeholder="Nombre de la empresa" required>
                <input name="dir" type="text" placeholder="Direccion" required>
                <input name="bar" type="text" placeholder="Barrio" required>
                <input name="tel" type="number" placeholder="Telefono" required>
                <input class="btn2" type="submit" value="REGISTRAR">
                
            </form>
        </section>

        <section class="container-table">
            <table>
                <tr>
                    <th>NIT</th>
                    <th>NOMBRE EMPRESA</th>
                    <th>DIRECCION</th>
                    <th>BARRIO</th>
                    <th>TELEFONO</th>
                </tr>

                <?php
                    include('procesos/conexion.php');
                   /*  error_reporting(0); */
                    $sql="SELECT * FROM empresas";
                    $resultado=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($resultado)){
                ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                    </tr>

                <?php
                    }
                ?>

            </table>

            <h2>© Cristian Cruz & Daniel Chavez ©</h2>
        </section>
    </div>
</body>
</html>