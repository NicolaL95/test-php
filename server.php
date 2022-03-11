<?php
session_start();
$name = "";
$surname = "";
$email    = "";
$errors = array();
$con = mysqli_connect('localhost', 'root', 'root', 'php_test', '3306');
if (isset($_POST['reg_user'])) {
    $name =
        mysqli_real_escape_string($con, $_POST['name']);
    $surname =
        mysqli_real_escape_string($con, $_POST['surname']);
    $email =
        mysqli_real_escape_string($con, $_POST['email']);
    $password =
        mysqli_real_escape_string($con, $_POST['password']);

    if (empty($name)) {
        array_push($errors, "Nome Richiesto");
    }
    if (empty($surname)) {
        array_push($errors, "Cognome Richiesto");
    }
    if (empty($email)) {
        array_push($errors, "Email richiesta");
    }
    if (empty($password)) {
        array_push($errors, "Password richiesta");
    }


    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "email inserita gia' esistente");
        }
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO users (name,surname, email, password) 
  			  VALUES('$name','$surname', '$email', '$password')";
        mysqli_query($con, $query);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
