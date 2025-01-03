<?php
include 'storeData.php';
if($_SERVER["REQUEST_METHOD"] === "POST") {

    // getting the action
    $action = $_POST["action"];

    // condtion
    if($action === 'regeister') {
        // santize the getting value 
        $email = htmlspecialchars($_POST["email"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        // check for proper input
        if(empty($email) || empty($username) || empty($password)) {
            header("Location: index.php?Error=missingfield");
            exit();
        }
    
        // properValidation of email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: index.php?Error=invalid email");
            exit();
        }
    
        // Store the value 
        storeData($email, $username, $password);
    
        //Redirect it 
        header("Location: index.php");
        exit();

    } else if($action === 'login') {
        
    }
    
} else {
    // Redirect it with some error
    header("Location: index.php? Error=invalid submissino");
    exit();
}



 