<!--Se necesita que el usuario ingrese su salario, nombre y años trabajando en una empresa,
se desea mostrar sus datos por pantalla con el siguiente formato ->  "El Señor NOMBRE, Cuenta con un salario de: SALARIO;
y lleva trabajando para nosotros AÑOS_TRABAJADOS Años".
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_4</title>
</head>
<body>
<div class="container">
    <section>
        <br>
        <form action="index.php" method="post">
            <label>Escribe el nombre del trabajador:</label> <br>
            <input type="text" required name="name" placeholder="Digite un texto"> <br>
            <label> Ingrese el monto de su sueldo. </label> <br>
            <input type="number" required  name="num1" placeholder="Digite el sueldo con numeros"> <br>
            <label>Ingrese los años trabajados: </label> <br>
            <input type="number" name="year" placeholder="Digite en numero"> <br>
            <input type="submit" value="Verificar">
        </form>
    </section>
    <?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sueldo=$_POST["num1"];
    $years=$_POST["year"];
    $name=$_POST["name"];

    //actividad 5 implementado en la misma linea de codigos de la catividad 4


if ($sueldo >= 320000 && $sueldo <= 500000) {
    $aumento = $sueldo * 0.05;
}else {
    $aumento = $sueldo * 0.08;
}
$nuevoSueldo = $sueldo + $aumento;
echo "El Señor: " , $name;
echo " Con un sueldo de: $" . number_format($sueldo, 0, ',', '.') . " y su aumento es: $" . number_format($nuevoSueldo, 0, ',', '.');
echo " lleva trabajando para nosotros $years Años. <br>" ; 

if ($years >= 10 && $years <= 15 && $sueldo <350000 ){ 
    echo " ¡¡Va de vacaciones!!";   
}else { 
    echo "¡¡No puede ir de vacaciones!!" ;
} 
}
?>
</body>
</html>