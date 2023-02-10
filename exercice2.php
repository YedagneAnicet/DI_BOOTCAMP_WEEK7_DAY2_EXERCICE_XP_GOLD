<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <?php if (isset($_POST['submit'])) :
        $somme = $_POST['number1'] + $_POST['number2']; ?>
        <div> La somme de <?php echo $_POST['number1'] ?> et de <?php echo $_POST['number2'] ?> est <?php echo $somme ?></div>
    <?php endif; ?>
    <form action="exercice2.php" method="post">
        <input type="number" name="number1" placeholder="Nombre 1"> <br>
        <input type="number" name="number2" placeholder="Nombre 2"> <br>
        <input type="submit" name="submit" value="Calculer"> <br>
    </form>

</body>

</html>