<?php
session_start();

function died($error){
    //your error code can go here
    echo "We are verry sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear bellow.<br /><br />";
    echo $error."<br/><br/>";
    echo "Please go back and fix these errors <br/><br/>";
    die();
}
//validation expected data exists
$username = $_POST['username']; //required
$email = $_POST['email']; //required
$password = $_POST['password']; //required
$captcha = $_POST['captcha']; //required
$correctsum = $_POST['correctsum']; //required
$error_message = "";

$errors = [];

// validare Username
if (empty($username)) {
    $errors[] = "Numele de utilizator este obligatoriu.";
} elseif (!preg_match("/^[a-zA-Z0-9_]{6,20}$/", $username)) {
    $errors[] = "Numele de utilizator trebuie să aibă între 6 și 20 de caractere și să conțină doar litere, cifre și underscore.";
}

// validare E-mail
if (empty($email)) {
    $errors[] = "Email-ul este obligatoriu.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email-ul nu este valid.";
}

// Validare parolă
if (empty($password)) {
    $errors[] = "Parola este obligatorie.";
} elseif (!preg_match("/^[a-zA-Z0-9_]{6,15}$/", $password)) {
    $errors[] = "Parola trebuie să aibă cel puțin 6 caractere, acestea fiind a-z, A-Z, 0-9, si _ ";
}

//verificare capchea
if (!isset($_POST['captcha'])){
    $errors[] = "Capchea este obligatorie.";
} elseif ($_POST['captcha']!=$_POST['correctsum']){
    $errors[] = "Suma nu e corecta :( .";
}

// Afișăm erorile daca acestea exista
if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else{
    header('Location: SuccesSignIn.php');
} 


?>