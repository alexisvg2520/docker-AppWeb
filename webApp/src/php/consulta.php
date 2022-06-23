
<?php
$host = getenv('MYSQL_HOST');
$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USERNAME');
$password = getenv('MYSQL_PASSWORD');

  
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

$arreglo = array();

$query = $db->prepare(" SELECT * FROM c_contreras ORDER BY Fecha ");
$query->execute();
$data = $query->fetchAll();

foreach ($data as $row): 
        $fecha = $row['Fecha'];
        $taller = $row['Name_taller'];
        $costos = $row['Costos'];
        $kilometraje = $row['Kilometraje'];
        $mantenimiento= $row['Tipo_mantenimiento'];
        $observaciones= $row['Observaciones'];

$arreglo[] = array("fecha" => $fecha,
"taller" => $taller,
"costos" => $costos,
"kilometraje" => $kilometraje,
"mantenimiento" => $mantenimiento,
"observaciones" => $observaciones);

endforeach;

// Encoding array in JSON format
echo json_encode($arreglo);
?>


