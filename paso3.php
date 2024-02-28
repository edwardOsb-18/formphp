<?php
session_start();

// Obtener los datos de la sesión
$name = $_SESSION['name'];
$count = $_SESSION['count'];
$area = $_SESSION['area'];


$nombreuno = $_SESSION['nombreuno'];
$nombredos = $_SESSION['nombredos'];
$nombretres = $_SESSION['nombretres'];

$nombrecuatro = $_SESSION['nombrecuatro'];
$nombrecinco = $_SESSION['nombrecinco'];



$imagen1 = $_SESSION['imagen1'];
$imagen2 = $_SESSION['imagen2'];

// Guardar los datos en la base de datos
// Aquí debes conectar a tu base de datos y ejecutar la consulta SQL para insertar los datos


// $nombre=$_POST['name'];
// $count=$_POST['count'];
// $area=$_POST['area'];

$conexion=mysqli_connect("192.99.207.151","corladic_cham800","@mysql12","corladic_cham800");

$consulta= "insert into request values('','$name','$count','$area')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "Datos agregados correctamente";

}

else
{
    print_r('aaa');
    print_r($conexion);
    print_r($consulta);
    print_r($resultado);
    print_r('bbb');
    echo "Error al ingresar los datos";
}

mysqli_close($conexion);











// Limpiar la sesión después de guardar los datos
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Múltiples Pasos - Confirmación</title>
</head>
<body>
    <h2>¡Gracias por enviar el formulario!</h2>
    <p>A continuación se muestran los datos que enviaste:</p>
    <h2>Nombres de la empresa</h2>
    <ul>
        <li><?php echo $nombreuno; ?></li>
        <li><?php echo $nombredos; ?></li>
        <li><?php echo $nombretres; ?></li>
        <li><?php echo $nombrecuatro; ?></li>
        <li><?php echo $nombrecinco?$nombrecinco:"no hay nombre"; ?></li>
        
    </ul>

    <ul>

        <li>Nombre: <?php echo $name; ?></li>
        <li>count: <?php echo $count; ?></li>
        <li>area: <?php echo $area; ?></li>
        <li>Imagen 1: <?php echo $imagen1; ?></li>
        <li>Imagen 2: <?php echo $imagen2; ?></li>
    </ul>
</body>
</html>
