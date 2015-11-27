<?php
    include("connection.php");

    if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
    }

    $appointmentServiceSql = "INSERT INTO appointment_service (cut_type, color_type, styling_type) VALUES (" . $_POST['cut_type'] . ", " . $_POST['color_type'] . ", " . $_POST['styling_type'] . ")";
    $appointmentServiceResults = mysqli_query ($connect, $appointmentServiceSql);
    $insertAppointmentInsertId = mysqli_insert_id($connect);

    
    $appointmentSql = "INSERT INTO appointment (customer_id, appointment_service_id, customer_dateTime, customer_lng, customer_lat, hairStylist_id, appointment_status) VALUES (" . $_POST['customer_id'] . ", " . $insertAppointmentInsertId  . ", '" . $_POST['customer_dateTime'] . "', " . $_POST['customer_lng'] . ", " . $_POST['customer_lat'] . ", " . $_POST['hairStylist_id'] . ", 0)";
   // echo $appointmentSql;

    $results = mysqli_query ($connect, $appointmentSql);
    //exit;
    // $cut = null;
    // $color = null;
    // $styling = null;


    // if($_POST['cut']) {
    //     $cut = $_POST['cut'];
    // }
    //  if($_POST['color']) {
    //     $color = $_POST['color'];
    // }
    //  if($_POST['styling']) {
    //     $styling = $_POST['styling'];
    // }


    // $cost = 0;

    // if($cut) {
    //     $cut_type = $cut['simpleCut'];

    //     if($cut_type == "simpleCut") {
    //         $cost += 50;

    //     } else if($cut_type == "premiumCut") {
    //         $cost += 90;
    //     }
    // }

    // if($color) {
    //     $color_type = $color['simpleColor'];

    //     if($color_type == "simpleColor") {
    //         $cost += 70;

    //     } else if($cut_type == "premiumColor") {
    //         $cost += 140;
    //     }
    // }

    //  if($styling) {
    //     $styling_type = $styling['simpleStyling'];

    //     if($styling_type == "simpleStyling") {
    //         $cost += 50;

    //     } else if($styling_type == "premiumStyling") {
    //         $cost += 70;
    //     }
    // }

    // $sql = "INSERT INTO appointment (customer_id, appointment_service_id, customer_dateTime, customer_lng, customer_lat, hairStylist_id, appointment_status) values ('".$_POST["customer_id"]."', '".$_POST["appointment_service_id"]."', '".$_POST["customer_dateTime"]."', '".$_POST["customer_lng"]."', '".$_POST["customer_lat"]."', '0', '0')";
    // $sql = "INSERT INTO appointment (service_id, customer_id, customer_price, customer_dateTime, customer_lng, customer_lat, appointment_status) values ('".$_POST["service_id"]."', '".$_POST["customer_id"]."', '".$_POST["customer_price"]."', '".$_POST["customer_dateTime"]."', '".$_POST["customer_lng"]."', '".$_POST["customer_lat"]."', '0')";

    // $results = mysqli_query ($connect, $sql);
    
    if($results){
        echo json_encode("success");
    };

  ?>