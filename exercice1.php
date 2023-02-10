<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && ((strlen($_POST['password']))) >= 8) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
           
            $message = "Informations enregister avec sucess";
        } else {
            $message = "Champ mal renseigner";
        }
    }
    ?>

    <div>
        <?php echo $message?>
        <br><br>
    </div>
    <form action="exercice1.php" method="post">
        <input type="text" name="name" placeholder="Nom" required> <br>
        <input type="email" name="email" placeholder="Email" required> <span style="color:brown"><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <input type="submit" name="submit" value="Valider">
    </form>
</body>

</html>