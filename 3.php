<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css">
<?php 
session_start();

$medico= $_POST['medico'];
$_SESSION['MEDICO']=$medico;
?>

<div class="contenedor-final">
    <h1> Ud. ha reservado exitosamente el siguiente turno</h1>
    <h2><span>Paciente: </span> <?php echo $_SESSION['NOMBRE']." ". $_SESSION['APELLIDO']?></h2>
    <h2><span>Número de socio:</span> <?php echo$_SESSION['CONTRASEÑA']?></h2>
    <h2><span>Usted será atendido en: </span>  <?php echo $_SESSION['ESPECIALIDAD']."  ,por el especialista :".$medico;?></h2>
 </div>
<!-- 
echo $_SESSION['NOMBRE'].$_SESSION['APELLIDO'];
echo "<br/>";
echo "Número de socio:".$_SESSION['CONTRASEÑA'];
echo "<br/>";
echo "Usted será atendido en: ". $_SESSION['ESPECIALIDAD']."  ,por el especialista :".$medico;
?>
 -->
