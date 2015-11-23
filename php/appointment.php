<?php
	include("connection.php");

	$query = "SELECT appointment.customer_dateTime, appointment_service.cut_type, appointment_service.color_type, appointment_service.styling_type, appointment.hairStylist_id FROM appointment
		LEFT JOIN appointment_service ON appointment_service.ID = appointment.appointment_service_id";
	$result = mysqli_query($connect, $query);
	if($result){
		$arr = array();
		while($row = mysqli_fetch_array($result)){
			$str = "Service: ";
			if($row['cut_type'] > 0){
				$str.='cut';
			}
			$color = "green";
			if($row['hairStylist_id'] == 1){
				$color='yellow';
			}
			$obj = array(
				"title"=>$str,
				"start"=>$row['customer_dateTime'],
				"end"=>$row['customer_dateTime'],
				"data"=>"Your info",
				"backgroundColor"=>$color
			);
			array_push($arr, $obj);

		}
		echo json_encode($arr);
	}
?>