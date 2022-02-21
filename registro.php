<?php
include('conexion-inicio.php');
include('bootstrap.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<form action="" method="post" name="form3">
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Registro</h1>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Insertar nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="usuario">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="insertar contraseña" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg" name="registro">Registrar</button><br><br>
                    <a class="link" href="login.php">Inicio de sesion</a><br>
                </div>
            </form>
        </div>
    </div>
   <?php
			if(isset($_POST['registro']))
			{
		if(!empty($_POST['nombre']))	
		{
			mysqli_query($cnx,"INSERT into inicio values
			('$_POST[nombre]',
			'$_POST[usuario]',
			'$_POST[password]' )");
            header('location:login.php');
			}
        }
			?>
   </form>
</body>

</html>
