<?php 
require 'db.php';
$correo = $_POST['email'];
$pass = $_POST['password'];

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'fenix';
$conn=mysqli_connect($server, $username, $password, $database);

if(!$conn)
{
	 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuariofenix where email = '$correo' and password = '$pass'";
$query = mysqli_query($conn, $sql);
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
$cliente = $row[4];

if($count == 0)
{
	echo'<script type="text/javascript">
    alert("Datos incorrectos o usuario no registrado");
    window.location.href="login.php";
    </script>';
}
else
{
	session_start();
	$_SESSION['cliente'] = $row[4];
	if($cliente == 'cliente frecuente')
	{
	echo'<script type="text/javascript">
    window.location.href="index.php";
    </script>';	
	}
	if($cliente == 'cliente frecuente')
	{
	echo'<script type="text/javascript">
    window.location.href="index.php";
    </script>';	
	}

}
?>