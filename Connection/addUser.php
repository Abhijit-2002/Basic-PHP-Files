<?php
    include 'config.php';

    if(isset($_POST['ok'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $status = 0;

        $sql = INSERT INTO  `user` (`name`)
    }