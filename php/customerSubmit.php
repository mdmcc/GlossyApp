<?php

    //var_dump($_POST);
    $connect = mysql_connect(“localhost”, “kmcin”, “GlossyApp2”); 
    if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“glossy”, $connect);
    include("sessions.php");
    // include("sessions.php");
    //var_dump($_POST["customer_dateTime"]);
    //$_POST["customer_dateTime"] = date($_POST["customer_dateTime"]);

    $sql = "insert into appointment (service_id, customer_id, customer_price, customer_dateTime, customer_lng, customer_lat, appointment_status) values ('".$_POST["service_id"]."', '".$_POST["customer_id"]."', '".$_POST["customer_price"]."', '".$_POST["customer_dateTime"]."', '".$_POST["customer_lng"]."', '".$_POST["customer_lat"]."', '0')";
    $results = mysqli_query ($connect, $sql);
    if($results){

        echo json_encode("success");
    };

    exit;

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    if ($methodType === 'POST') {


        foreach ($_POST as $key => $value){
            // simply parrot back what was sent
            $data[$key] = $value;
        }
        echo json_encode($data, JSON_FORCE_OBJECT);
        return;


        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // yes, is AJAX call
            // answer POST call and get the data that was sent
            if(isset($_POST["cut"]) 
                && isset($_POST["color"]) 
                && isset($_POST["blowOut"]) 
                && isset($_POST["appointment"]) && !empty($_POST["appointment"])
                && isset($_POST["pacinput"]) && !empty($_POST["pacinput"])){


                // get the data from the post and store in variables
                $cut = $_POST["cut"];
                $color = $_POST["color"];
                $blowOut = $_POST["blowOut"];
                $appointment = $_POST["appointment"];
                $googlemap = $_POST["pacinput"];


                $sql = "";

                if(!empty($cut) && !empty($blowOut) && !empty($color)) {
                    $sql = "insert into appointment (service_id, customer_id, customer_price, customer_dateTime, customer_lng, customer_lat, appointment_status) values ('".$_POST["service_id"]."', '".$_POST["customer_id"]."', '".$_POST["customer_price"]."', '".$_POST["customer_dateTime"]."', '".$_POST["customer_lng"]."', '".$_POST["customer_lat"]."', '0')";
                } 


                // HERE'S WHERE YOU'D GET THE VALUES FROM THE DB
                //if($cut== "30to50" && $color == "40to60" && $blowOut == "30to50") {
                    // success
                    /*$_SESSION['cut'] = $cut;
                    $_SESSION['color'] = $color;
                    $_SESSION['blowOut'] = $blowOut;
                    $_SESSION['appointment'] = "";
                    $_SESSION['googlemap'] = "";
                    $_SESSION['scheduled'] = true;*/

                    //$sid= session_id();
//                    $data = array("status" => "success");


  //              } else {
  //                  $data = array("status" => "fail", "msg" => "Services and/or appointment and/or location not correct.");
  //              }
/*
                $data = array("msg" => "Thank you $firstName $lastName, you've been added to our mailing list!",
                    "firstName" => "$firstName", "lastName" => "$lastName",
                    "email" => "$email");
                ////////////////////////////////////////////////////////////
                ///   HERE'S WHERE YOU COULD DO A DATABASE ENTRY UPDATE
                ////////////////////////////////////////////////////////////
*/

            } else {
                $data = array("status" => "fail", "msg" => "Services, calendar date/time or map were absent.");
            }



        } else {
            // not AJAX
            $data = array("status" => "fail", "msg" => "Has to be an AJAX call.");
        }


    } else {
        // simple error message, only taking POST requests
        $data = array("status" => "fail", "msg" => "Error: only POST allowed.");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>

