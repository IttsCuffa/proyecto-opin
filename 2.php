<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css">
<?php
session_start();


$especialidad= $_POST['especialidad'];
$_SESSION['ESPECIALIDAD']=$especialidad;

switch ($especialidad){
    case ("Clinica médica"):
     echo '<form action= "3.php" method="post" class="form">
     <label  class="label-select"> Seleccione médico especialista:</label>
     <select name= "medico" class="select">
     <option>Dr.Gomez</option>
     <option>Dra.Diaz</option>
     <option>Dra.Gutierrez</option>
     <option>Dr.Ferrari</option>
     <option>Dra.lopez</option>
     <option>Dr.Romero</option>
     </select>
     <input type="submit" class="btn-submit">';
     break;
    case("Pediatria"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione médico especialista:</label>
        <select name= "medico" class="select">
        <option>Dr.Fernández</option>
        <option>Dra.Otto</option>
        <option>Dra.Rios</option>
        <option>Dr.Sanchez</option>
        <option>Dra.Cruz</option>
        <option>Dr.Marcos</option>
        </select>
        <input type="submit" class="btn-submit">';
        break; 
    case("Traumatologia"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione médico especialista:</label>
        <select name= "medico" class="select">
        <option>Dr.Fernández</option>
        <option>Dra.Otto</option>
        <option>Dra.Rios</option>
        <option>Dr.Sanchez</option>
        </select><br><br><br>
        <input type="submit" class="btn-submit">';
        break; 
    case("Dermatologia"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione médico especialista:</label>
        <select name= "medico" class="select">
        <option>Dr.Cruz</option>
        <option>Dra.Marcos</option>
        <option>Dra.Ramos</option>
        <option>Dr.Sanisi</option>
        </select>
        <input type="submit" class="btn-submit" >';
        break; 
    case("Ginecologia"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione médico especialista:</label>
        <select name= "medico" class="select">
        <option>Dr.Peralta</option>
        <option>Dra.Negroni</option>
        <option>Dra.Perez</option>
        <option>Dr.Suarez</option>
        </select>
        <input type="submit" class="btn-submit">';
        break;       

 }     
?>
