<html>

<body>
<?php
$enlace = mysqli_connect("ls-352301b0959b08b50b7bb9ccf252443c9381196a.cspmoxwykens.us-east-2.rds.amazonaws.com", "dbmasteruser", "Goku12345", "dbclase","3306");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sqlQuery = "SELECT * from dogs ORDER by id ASC";
$ob = mysqli_query($enlace,$sqlQuery);

echo "Total de perritos: ".mysqli_num_rows($ob)."<br><br>";
for($i=0;$i<mysqli_num_rows($ob);$i++){
    $data = mysqli_fetch_array($ob);
    echo "Nombre de perrito: ".$data["name"]." (".$data["owner"].")<br>";
}

?>

</body>
</html>
