<?php
    include("connection.php");

    //var_dump($_POST);
    
    $connect = mysqli_connect("localhost", "glossyadmin1", "glossy"); 
    
    if(mysqli_connect_errno()){
    echo "Something went wrong connecting... " . mysqli_connect_error();
    exit();
    }
    // mysql_select_db("glossy", $connect);
    
    // include("sessions.php");
    //var_dump($_POST["customer_dateTime"]);
    //$_POST["customer_dateTime"] = date($_POST["customer_dateTime"]);

    $sql = "INSERT INTO appointment (service_id, customer_id, customer_price, customer_dateTime, customer_lng, customer_lat, appointment_status) values ('".$_POST["service_id"]."', '".$_POST["customer_id"]."', '".$_POST["customer_price"]."', '".$_POST["customer_dateTime"]."', '".$_POST["customer_lng"]."', '".$_POST["customer_lat"]."', '0')";
    $results = mysqli_query ($connect, $sql);

    // $results = mysqli_query ($connect, $sql);
    
    if($results){
        echo json_encode("success");
    };

  ?>  
