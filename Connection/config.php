<?php
    $dbname='asansol';
    $host='localhost';
    $username='root';
    $password='';

    $conection = mysqli_connect($host,$username,$password,$dbname);

    if($conection){
        echo "<h1>Database Connected</h1>";
    }else{
        echo "Database Not Connected".mysqli_error($conection);
    }
?>