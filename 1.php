
<?php
session_start();
$nombre= $_POST['nombre'];
$_SESSION['NOMBRE']=$nombre; 
$apellido= $_POST['apellido'];
$_SESSION['APELLIDO']=$apellido; 
$contraseña=$_POST['contraseña'];
$_SESSION['CONTRASEÑA']=$contraseña;
$email=$_POST['email'];
$_SESSION['email']=$email;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <!---Formulario rosario especialidad-->
 <form action= "2.php" method="post" class="form" >
        <label class="label-select" > Seleccione especialidad médica que requiere:</label>
        <select name= "especialidad" class="select">
        <option class="select-option">Clinica médica</option>
        <option>Pediatria</option>
        <option>Traumatologia</option>
        <option>Dermatologia</option>
        <option>Ginecologia</option>
        </select>
        <input type="submit" class="btn-submit">
</body>
</html>
 