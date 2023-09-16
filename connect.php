<?php 
    // //Kết nối
    // $servername= "localhost";
    // $username="root";
    // $password="";
    // $dbname="banmu";
    // $conn=mysqli_connect($servername,$username,$password,$dbname);

    // //kiểm tra kết nối
    // if(!$conn){
    //     die("Connection failed: ".mysqli_connect_error());
    // }else;


    $conn = mysqli_init();
    mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
    mysqli_real_connect($conn, "munonchat.mysql.database.azure.com", "tienanhdz", "phuc17@@", "banmu", 3306, MYSQLI_CLIENT_SSL);
 ?>
 