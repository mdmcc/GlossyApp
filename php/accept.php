<?php
    include("connection.php");

    if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
    }

    // $appointmentServiceSql = "INSERT INTO appointment_service (cut_type, color_type, styling_type) VALUES (" . $_POST['cut_type'] . ", " . $_POST['color_type'] . ", " . $_POST['styling_type'] . ")";
    // $appointmentServiceResults = mysqli_query ($connect, $appointmentServiceSql);
    // $insertAppointmentInsertId = mysqli_insert_id($connect);

    
    // $appointmentSql = "INSERT INTO appointment (hairStylist_id) VALUES (" . $_POST['hairStylist_id'] . ")";


    $appointmentSql = "UPDATE appointment SET hairStylist_id=2, appointment_status = 1 WHERE id=(" . $_POST['appointment_id'] . ") ";


   // echo $appointmentSql;
    $results = mysqli_query ($connect, $appointmentSql);

    
    if($results){
        echo json_encode("success");
    };

  ?>