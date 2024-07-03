<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_3</title>
</head>
<body>
<div class="container">
    <section>
        <br>
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Digita el sueldo"> <br>
            <input type="submit" value="Verificar">
        </form>
    </section>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sueldo=$_POST["num1"];
if ($sueldo >= 320000 && $sueldo <= 500000) {
    $aumento = $sueldo * 0.05;
} else {
    $aumento = $sueldo * 0.08;
}
$nuevoSueldo = $sueldo + $aumento;
echo "Su sueldo es: $" . number_format($sueldo, 0, ',', '.') . " y su aumento es: $" . number_format($nuevoSueldo, 0, ',', '.');
}
?>

</body>
</html>