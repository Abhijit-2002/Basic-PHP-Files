<?php
    $dbname = 'asansol';
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if(!$conn){
        echo "Connection Error".mysqli_error($conn);
    }   
    // if($conn){
    //     echo "<h1>Database Connected</h1>";
    // }else{
    //     echo "Database Not Connected".mysqli_error($conn);
    // }
    
?>