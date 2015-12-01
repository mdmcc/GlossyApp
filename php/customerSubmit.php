<?php
    include("connection.php");
    include("sessions.php");

    if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
    }

    $appointmentServiceSql = "INSERT INTO appointment_service (cut_type, color_type, styling_type) VALUES (" . $_POST['cut_type'] . ", " . $_POST['color_type'] . ", " . $_POST['styling_type'] . ")";
    $appointmentServiceResults = mysqli_query ($connect, $appointmentServiceSql);
    $insertAppointmentInsertId = mysqli_insert_id($connect);

    
    $appointmentSql = "INSERT INTO appointment (customer_id, appointment_service_id, customer_dateTime, customer_lng, customer_lat, customer_address, hairStylist_id, appointment_status) VALUES (" . $_SESSION['id'] . ", " . $insertAppointmentInsertId  . ", '" . $_POST['customer_dateTime'] . "', " . $_POST['customer_lng'] . ", " . $_POST['customer_lat'] . ", '" . $_POST['customer_address'] . "', " . $_POST['hairStylist_id'] . ", 0)";
    //echo $appointmentSql;

    $results = mysqli_query ($connect, $appointmentSql);
    
    if($results){
        echo json_encode("success");
    };

  ?>