<?php
  include ("db.inc.php");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Coneccion fallida " . $conn->connect_error);
}


$conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql1 = "CREATE TABLE c_contreras (
    Fecha DATE,
    Name_taller VARCHAR(40) NOT NULL,
    Costos INT(4) NOT NULL,
    Kilometraje INT(4) NOT NULL,
    Tipo_mantenimiento VARCHAR(40) NOT NULL,
    Observaciones VARCHAR(300)
    )";

     
    // use exec() because no results are returned
    $conn1->exec($sql1);
     
    echo "Instalación <b>Exitosa</b><br>Nueva tabla creada.<br><br>";
    
  } catch(PDOException $e) {
    echo "Instalación <b>¡EXISTENTE!</b><br>No se necesita crear una tabla de registro";
  
  }
  
  $conn1 = null;

  


?>