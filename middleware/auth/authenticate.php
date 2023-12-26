<?php
    include '../dbConnection.php';
    session_start();
    // var_dump($_POST['email']);
    // var_dump($_POST['password']);
    // exit;
    $email = $_POST['email'];
    $password = $_POST['password']; 
    unset($_SESSION['logged_In']);
    
    $SQL = "SELECT * FROM tbl_user WHERE BINARY email=? AND BINARY password=?";
    $statement = $connect->prepare($SQL);
    $statement->bind_param("ss", $email, $password);

    $statement->execute();
    $resultSet = $statement->get_result();
    if(mysqli_num_rows($resultSet)){
        $user = $resultSet->fetch_array();
        $_SESSION['logged_In']['id'] = $user['id'];
        $_SESSION['logged_In']['fname'] = $user['fname'];
        $_SESSION['logged_In']['lastname'] = $user['lastname'];
        $_SESSION['logged_In']['email'] = $user['email'];
        $_SESSION['logged_In']['userType'] = $user['userType'];
        if ($_SESSION['logged_In']['userType'] == 'franchiser') {
            header('LOCATION: ../../FRANCHISOR/businessdashboard.php');
            die();              
        } else {
            header('LOCATION: ../../STARTER/index.php');
            die();    
        }
    }else{
        $_SESSION['toaster_Error'] = 'User Not Found';
        header('LOCATION: ../../index.php');
        die();
    }
?>