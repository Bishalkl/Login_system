<?php
include ("db.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "login") {
    // collect the data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch users data from json file
    $userData = getUserData();
    $users = $userData['users'];

    // check if user exists and password is correct
    foreach($users as $user) {
        if($user["email"] === $email && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
        }

        header("location: Welcome.php
        ");
        exit();
    }
 }
?>