<?php 
     $rootDir = $_SERVER['DOCUMENT_ROOT'].'/KATALOG/';
    $server = "localhost"; // nama server
    $user = "root";
    $pass = '';
    $db = "yourskingoal"; // nama database 

    $koneksi = mysqli_connect($server, $user, $pass, $db);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // echo ;
?>