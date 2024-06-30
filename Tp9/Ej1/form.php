<html>
<head>
<title>Captura de datos del form</title>
</head>
<body>
<?php
$nombre = $_POST['name'];
echo $nombre ."<br>";

$edad = $_POST['edad'];
$mayoredad;
if($edad>=18){
    $mayoredad="Es mayor de edad";
}
if($edad<18){
    $mayoredad="No es mayor de edad";
}
echo $mayoredad ."<br>";
?>
</body>
</html>