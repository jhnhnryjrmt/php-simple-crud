<?php

require 'database.php';

if (!empty($_POST)) {
    //track validation errors
    $nameError = null;
    $emailError = null;
    $mobileError = null;

    // track post values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //validate inputs
    $valid = true;
    if (empty($name)) {
        $nameError = 'Please enter your name.';
        $valid = false;
    }

    if (empty($email)) {
        $emailError = 'Please enter your email address';
        $valid = false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Please enter a valid email address.';
        $valid = false;
    }

    if (empty($mobile)) {
        $emailError = 'Please enter your mobile number.';
        $email = false;
    }

    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO customers (name, email, mobile) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($name, $email, $mobile));
        Database::disconnect();
        header("Location: index.php");
    }
}

?>