<?php

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
            if(isset($_POST["cut"]) && !empty($_POST["cut"])
                && isset($_POST["color"]) && !empty($_POST["color"])
                && isset($_POST["blowOut"]) && !empty($_POST["blowOut"])
                && isset($_POST["appointment"]) && !empty($_POST["appointment"])
                && isset($_POST["pac-input"]) && !empty($_POST["pac-input"])){


                // get the data from the post and store in variables
                $cut = $_POST["cut"];
                $color = $_POST["color"];
                $blowOut = $_POST["blowOut"];
                $appointment = $_POST["appointment"];
                $googlemap = $_POST["pac-input"];


                // HERE'S WHERE YOU'D GET THE VALUES FROM THE DB
                if($cut== "30to50" && $color == "40to60" && $blowOut == "30to50" && $appointment == "" && $googlemap == "") {
                    // success
                    $_SESSION['cut'] = $cut;
                    $_SESSION['color'] = $color;
                    $_SESSION['blowOut'] = $blowOut;
                    $_SESSION['appointment'] = "";
                    $_SESSION['googlemap'] = "";
                    $_SESSION['scheduled'] = true;

                    $sid= session_id();
                    $data = array("status" => "success", "sid" => $sid);


                } else {
                    $data = array("status" => "fail", "msg" => "Services and/or appointment and/or location not correct.");
                }
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

