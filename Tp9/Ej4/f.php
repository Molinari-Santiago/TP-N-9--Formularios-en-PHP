<html>
<head>
<title>Deudor</title>
</head>
<body>
<?php
$nombre=$_POST['name'];
echo $nombre."<br>";
if ($_REQUEST['deuda'] == "ns"){
echo "No debe pagar recargo";
}
if ($_REQUEST['deuda'] == "ss") {
echo "Debe pagar recargo";
}

?>
</body>
</html>