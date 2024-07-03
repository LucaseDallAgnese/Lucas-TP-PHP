<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>
<div class="container">
    <section>
        <br>
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Digita la edad"> <br>
            <input type="number" name="num2" placeholder="Digita la estatura">
            <input type="submit" value="Verificar">
        </form>
    </section>
    <?php
    if (!empty($_POST['num1'])) {
        $edad_usuario = intval($_POST['num1']);
        $edad_mayor = 18;
        $estatura =intval($_POST['num2']);
        $estatura_adecuada= 170;

        if ($edad_usuario >= $edad_mayor && $estatura < $estatura_adecuada) {
            echo "Puede pasar a la montaña rusa. <BR>";
        } else {
            echo "No puede pasar, no cumple los requisitos. <BR>";
    }}
    ?>
</div>
</body>
</html>
