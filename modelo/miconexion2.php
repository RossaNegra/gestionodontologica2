<?php
$servername = "localhost";
$database = "citas";
$username = "root";
$password = "";

// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$db = mysqli_select_db( $conexion, $database ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$consulta = "select * from pacientes";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombres</th>";
echo "<th>Apellidos</th>";
echo "</tr>";

while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['PacNombres'] . "</td><td>" . $columna['PacApellidos'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);
