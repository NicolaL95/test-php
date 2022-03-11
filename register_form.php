<?php
include('server.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register_style.css">
    <title>Login</title>
</head>

<body>
    <h1 class="text-center">Pizzapp</h1>
    <div id="box">
        <form method="post" action="register_form.php">
            <?php include('errors.php'); ?>
            <h2 class="text-center">Registrati</h2>
            <label for="name">Nome:</label>
            <br>
            <input class="w-100" type="text" name="name">
            <br><br>
            <label for="surname">Cognome:</label>
            <br>
            <input class="w-100" type="text" name="surname">
            <br><br>
            <label for="email">Email:</label>
            <br>
            <input class="w-100" type="email" name="email">
            <br><br>
            <label for="password">Password:</label>
            <br>
            <input class="w-100" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}" name="password">
            <br><br>
            <button type="submit" class="btn btn-success" name="reg_user">Registrati</button>
        </form>
    </div>
</body>

</html>