<?php
    include '../dbConnection.php';
    // include_once '../mail.php';
    session_start();

    foreach ($_POST as $key => $value) {
        $_SESSION['info'][$key] = $value;              
    }
    if (isset($_SESSION['info'])) {
        $lastname = $_SESSION['info']['lname'];
        $firstname = $_SESSION['info']['fname'];
        $email = $_SESSION['info']['email'];
        $password = $_SESSION['info']['password'];
        $userType = $_SESSION['info']['account-type'];

        $statement = $connect->prepare("INSERT INTO tbl_user (fname, lastname, email, password, userType) VALUES (?, ?, ?, ?, ?)");
        $statement->bind_param("sssss", 
            $firstname, 
            $lastname,  
            $email, 
            $password, 
            $userType
        );
        $statement->execute();
        unset($_SESSION['info']);
    } 
    
    