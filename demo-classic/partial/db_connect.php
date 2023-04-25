<?php
    $username='root';
    // lsclprmk
    $password='';
    // AejnvkkaLA3sx`
    $server='localhost';
    $database='bound';

    $connect_db_ls=mysqli_connect($server,$username,$password,$database);

    
    
    
    if(!$connect_db_ls){
        // echo "error";
        die('Error');
    }
    // Student Portal Database Attach
    else{
        // Established
        // echo "Connection Established with the Database";
    }


?>