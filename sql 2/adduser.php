<?php
    session_start();
    include 'config.php';

    if(isset($_POST['ok'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $status = 0;

        $sql = "INSERT INTO `user`(`name`, `mobile`, `email`, `username`, `password`, `status`)VALUES('$name', '$mobile', '$mail', '$username', '$hashed_password', '$status')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['name'] = 'Data Inserted';
            header('location:../index.php');
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
    
?>