<?php
	include("connection.php");

	$query = "SELECT customer.customer_firstName, customer.customer_lastName, appointment.customer_dateTime, appointment_service.cut_type, appointment_service.color_type, appointment_service.styling_type, appointment.hairStylist_id, appointment.id, hairStylist.hairStylist_firstName, hairStylist.hairStylist_lastName FROM appointment
		INNER JOIN appointment_service ON appointment_service.ID = appointment.appointment_service_id
		INNER JOIN customer ON customer.id = appointment.customer_id AND appointment.customer_id = 2
		INNER JOIN hairstylist ON hairStylist.id = appointment.hairStylist_id";
		// remove hard coded appointment.customer_id = 2 and appointment.hairStylist_id = 2

	$result = mysqli_query($connect, $query);

//var_dump($result);

	if($result){
		$arr = array();
		// $show = true;
		while($row = mysqli_fetch_array($result)){
			// if($show) {
			// 	var_dump($row);
			// 	$show = false;
			// }
			
			$str = "Service: ";
			if($row['cut_type'] == 1){
				$str .='Simple hair cut ';
			} else if($row['cut_type'] == 2) {
				$str .= 'Premium hair cut ';
			}
			if($row['color_type'] == 1){
				$str .='Simple hair colour ';
			} else if($row['color_type'] == 2) {
				$str .= 'Premium hair colour ';
			}
			if($row['styling_type'] == 1){
				$str .='Blow out ';
			} else if($row['styling_type'] == 2){
				$str .='Updo ';
			}

			$confirmation = "Tentative appointment";
			$color = "#edc951";
			if($row['hairStylist_id']){
				$color='#00a0b0';
				$confirmation = "Booked appointment";

			}

			$obj = array(
				"id"=>$row['id'],
				"title"=>$str,
				"start"=>$row['customer_dateTime'],
				"end"=>$row['customer_dateTime'],
				"confirmation"=>$confirmation,
				"backgroundColor"=>$color,
				"first_name"=>$row['customer_firstName'],
				"last_name"=>$row['customer_lastName'],
				// "stylist_firstname"=>$row['stylist_firstName'],
				// "stylist_lastname"=>$row['stylist_lastName'],
			);
			array_push($arr, $obj);

		}
		echo json_encode($arr);
	}
?>