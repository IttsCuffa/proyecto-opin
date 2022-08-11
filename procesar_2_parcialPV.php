 <!--google fonts-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
 <!--Hoja de estilo css-->
 <link rel="stylesheet" href="style/styles.css">
<?php

	session_start();
	
	$medico_ok = $_POST["medico_ok"];
	?>
<div class="contenedor-final">
	<?php
	if ($medico_ok == "medico_ok"){
		
		if ($_SESSION["confirmacion"] == "si_confirmacion") {
			echo "Sr/a. ".$_SESSION["nombre"]." ".$_SESSION["apellido"].": <br><br>";
			echo "El médico solicitado será enviado a la brevedad. Se ha enviado confirmación del pedido médico por mail. <br>";
			mail($_SESSION["destinatario"], $_SESSION["asunto"], $_SESSION["mensaje"]);
		} else {
			echo "Sr/a. ".$_SESSION["nombre"]." ".$_SESSION["apellido"].": <br><br>";
			echo "El médico solicitado será enviado a la brevedad. No se ha enviado confirmación por mail.";
		}
	} else {
		echo "Sr/a. ".$_SESSION["nombre"]." ".$_SESSION["apellido"].": <br><br>";
		echo "No ha confirmado el pedido médico. Si lo desea, vuelva a solicitar.";
	}
?>	
</div>
	
