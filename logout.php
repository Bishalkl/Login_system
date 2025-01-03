<?php
session_start();
session_unset(); // Remove all session variable
session_destroy(); // Destroy the session

// Redirect to login page after logout
header("Location: Login.php");
exit();