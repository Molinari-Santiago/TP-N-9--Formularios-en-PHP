<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
//5. Diseñar un formulario de suscripción para un sitio web. Solicitar el nombre y apellido
//completos de la persona, la edad, DNI, fecha de nacimiento, género, lugar de
//nacimiento, dirección, intereses y/o hobbies, comentarios, entre otros. La página que
//procesa el formulario debe mostrar las modificaciones realizadas por el usuario. Actualizar
//el sitio Web.
echo "El nombre ingresado:" . $_POST['name'];
echo "<br>";
echo "La edad es:". $_POST['edad'];
echo "<br>";
echo "Su DNI es: ". $_POST['DNI'];
echo "<br>";
echo "Su fecha de nacimiento es:".$_POST['FN'];
echo "<br>";
echo "El genero indicado es: ".$_POST['genero'];
echo "<br>";
echo "Su lugar de nacimineto es: ".$_POST['LdN'];
echo "<br>";
echo "Su direccion es: ".$_POST['direccion'];
echo "<br>";
echo "Los Hobbies indeicados son: ".$_POST['Hobbies']
?>
</body>
</html>