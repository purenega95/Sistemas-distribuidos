<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.CSS">
    <title>Formulario Clientes</title>
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
            <form action="insertar_cliente.php" method="post">
                <h1>FORMULARIO PARA CLIENTES</h1>
                <input name="ced" type="number" placeholder="Cedula" required>
                <input name="nom" type="text" placeholder="Nombre" required>
                <input name="ape" type="text" placeholder="Apellido" required>
                <input name="cel" type="number" placeholder="Celular" required>
                <input name="cor" type="email" placeholder="Correo" required>
                <input class="btn2" type="submit" value="REGISTRAR">
                
            </form>
        </section>

        <section class="container-table">
            <table>
                <tr>
                    <th>CEDULA</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CELULAR</th>
                    <th>CORREO</th>
                </tr>

                <?php
                    include('procesos/conexion.php');
                   /*  error_reporting(0); */
                    $sql="SELECT * FROM clientes";
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