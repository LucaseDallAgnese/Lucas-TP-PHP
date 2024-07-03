<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>
<body>
<div class="container">
    <section>
        <br>
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Digita la edad">
            <input type="submit" value="Verificar">
        </form>
    </section>
    <?php
    if (!empty($_POST['num1'])) {
        $edad_usuario = intval($_POST['num1']);
        $edad_mayor = 18;

        if ($edad_usuario >= $edad_mayor) {
            echo "Es mayor de edad. <BR>";
        } else {
            echo "No es mayor de edad. <BR>";
    }}
    ?>
</div>
</body>
</html>
