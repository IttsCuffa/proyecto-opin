 <!--google fonts-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
 <!--Hoja de estilo css-->
 <link rel="stylesheet" href="style/styles.css">
<?php

	session_start();
	
	$nombre = $_POST["nombre"];
	$_SESSION["nombre"] = $nombre;
	
	$apellido = $_POST["apellido"];
	$_SESSION["apellido"] = $apellido;
	
	$cuil = $_POST["cuil"];
	$_SESSION["cuil"] = $cuil;
	
	$domicilio = $_POST["domicilio"];	
	$_SESSION["domicilio"] = $domicilio;
	
	$plan = $_POST["plan"];
	$_SESSION["plan"] = $plan;
	
	$confirmacion = $_POST["confirmacion"];
	$_SESSION["confirmacion"] = $confirmacion;
	
	$destinatario = $_POST["email"];
	$_SESSION["destinatario"] = $destinatario;
	
	$asunto = "Confirmación de médico a domicilio";
	$_SESSION["asunto"] = $asunto;
	
	$mensaje = "Confirmamos la visita del médico a domicilio";
	$_SESSION["mensaje"] = $mensaje;
	
	if(filter_has_var(INPUT_POST,"tos")){
		$tos = $_POST["tos"];
	} else {
		$tos = "";}
	$_SESSION["tos"] = $tos;
	
	if(filter_has_var(INPUT_POST,"fiebre")){
		$fiebre = $_POST["fiebre"];
	}else{
		$fiebre ="";}
	$_SESSION["fiebre"] = $fiebre;
		
	if(filter_has_var(INPUT_POST,"dolor_corporal")){
		$dolor_corporal = $_POST["dolor_corporal"];
	} else{
		$dolor_corporal="";}
	$_SESSION["dolor_corporal"] = $dolor_corporal;
		
	if(filter_has_var(INPUT_POST,"vomitos")){
		$vomitos = $_POST["vomitos"];
	} else {
		$vomitos ="";}
	$_SESSION["vomitos"] = $vomitos;
		
	if(filter_has_var(INPUT_POST,"otros")){
		$otros = $_POST["otros"];
	} else {
		$otros ="";}
	$_SESSION["otros"] = $otros;
	
	while ($cuil==20295036878){ 
		echo "Por favor corrobore los datos ingresados: <br>";	
		echo "<br>";
		echo "Mi nombre es ".$nombre.", mi apellido es ".$apellido.", y mi domicilio es ".$domicilio.".<br>";
		echo "<br>";
		echo "Mi plan de cobertura es: ".$plan.".<br>";
		echo "<br>";
		echo "Los síntomas que poseo son: ".$tos." ".$fiebre." ".$dolor_corporal." ".$vomitos." ".$otros.".<br>";
		echo "<br>";
		break; 
		};
	

?>


    


	<form action = "procesar_2_parcialPV.php" method="POST" class="form">
	
		<?php    
			if ($confirmacion == "si_confirmacion") {
				echo "Deseo recibir confirmación del pedido médico por mail. <br>";
			} else {
				echo "No deseo recibir confirmación del pedido médico por mail. <br>";
			}
	
	
		?>
			<h2>¿Confirma el pedido médico a domicilio?: </h2>
			<div class="contenedor-opciones">
			<label>Si   </label>
			<input type="radio" name="medico_ok" value="medico_ok"> 
			<label>No   </label>
			<input type="radio" name="medico_ok" value="medico_no"> 
			</div>
			
		<input type="submit" value="Continuar"  class="btn-submit">
		</form>

