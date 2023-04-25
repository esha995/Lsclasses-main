<?php
    $username='root';
    $password='';
    $server='localhost';
    $database='bound';

    $connect_db_ls=mysqli_connect($server,$username,$password,$database);

    if(!$connect_db_ls){
        echo "error";
    }
    else{
        // Established
        echo "Connection Established with the Database";
    }


?>