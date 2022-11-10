<?php 
    //Start Session
    session_start();


    include('database.php');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database

    define('FOOT_NOTE', 'Tugas Kelompok Pemrograman Web Unkris');
    define('CURRENCY', 'Rp.');


?>