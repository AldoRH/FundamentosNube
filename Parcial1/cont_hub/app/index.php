<html>

<body>
<?php
$enlace = mysqli_connect("host.docker.internal", "root", "goku333", "clase","3335");

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