<?php
include ('db.php');

if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['action'] === 'register') {
    // collect form data
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    // check the valid input
    if(empty($email) || empty($username) || empty($password)) {
        header("Location: index.php?error=Invalid input");
        exit();
    }

    //check the email is validate or not
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=Invalid error");
        exit();
    }

    // Fetch current users from the JSON file
    $userData = getUserData();
    $users = $userData['users'];

    // Check if the email already exists
    foreach($users as $user) {
        if($user['email'] === $email) {
            // Redirect if email exists
            header("Location: index.php?error=Email already exists");
            exit();
        }
    }

    // create new user
    $newUser = [
        "id" => uniqid(),
        "email" => $email,
        "username" => $username,
        "password" => $password,

    ];

    // Add the new yser to the array
    $users[] = $newUser;

    // save update users list back to the JSON file
    saveUserData($users);

    // Redirect to login page after succesful registration
    header("Location: Login.php?message=Registration successful! Please login.");
    exit();
    

}