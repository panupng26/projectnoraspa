
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
</head>

<body>
<!-- start checkbooking -->

<?php
include('../connect.php');

?>
<table border=1>
	<tr>
    	<td>ชื่อผู้ให้บริการ</td>
       

<?php
$sql_bookingtime = "SELECT booking_time_id, booking_time_name FROM bookingtime";
$result_bookingtime = $conn->query($sql_bookingtime);

if ($result_bookingtime->num_rows > 0) {
    // output data of each row
	
?>
<?php
    while($row = $result_bookingtime->fetch_assoc()) {
		$idbookingtime = $row["booking_time_id"];
		$namebookingtime = $row["booking_time_name"];	
?>
 	<td><?php echo $namebookingtime; ?>  </td>
    

<?php
        
    }
} else {
    echo "0 results";
} ?>
     
       </tr>

<?php


$sql_person = "SELECT person_id, person_name FROM person";
$result_person = $conn->query($sql_person);

if ($result_person->num_rows > 0) {
    // output data of each row
?>

	<tr>
<?php
    while($row = $result_person->fetch_assoc()) {
		
		$idperson = $row["person_id"];
		$nameperson = $row["person_name"];	
?>	

    	<td>
		<?php echo $nameperson;?>
		</td>   
    	<td>
        
        </td>
    </tr>
<?php
    }
} else {
    echo "0 results";
}
?>
</table>

<?php
$sql_type = "SELECT type_id, type_name FROM type";
$result_type = $conn->query($sql_type);

if ($result_type->num_rows > 0) {
    // output data of each row
    while($row = $result_type->fetch_assoc()) {
		$idtype = $row["type_id"];
		$nametype = $row["type_name"];
?>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sent_type" id="exampleRadios1" value="<?php echo $idtype;?>">
  <label class="form-check-label" for="exampleRadios1">
<?php echo $nametype;?>
  </label>
</div>

<?php
    }

} else {
    echo "0 results";
}

$sql_service = "SELECT service_id, service_name,service_price FROM noraspa_service";
$result_service = $conn->query($sql_service);

if ($result_service->num_rows > 0) {
    // output data of each row
    while($row = $result_service->fetch_assoc()) {
		
	
        echo "id: " . $row["service_id"]. " ชื่อ " . $row["service_name"]. " ราคา ".$row["service_price"]. " บาท" ."<br>";
    }
} else {
    echo "0 results";
}


$sql_booking1 = "SELECT booking_id,booking_date,booking_time_id  FROM booking";
$result_booking1 = $conn->query($sql_booking1);

	if ($result_booking1->num_rows > 0) {
    // output data of each row
    while($row = $result_booking1->fetch_assoc()) {
		$idtimebooking = $row["booking_time_id"] ;
		$idbooking = $row["booking_id"];
		$bookingdate = $row["booking_date"];
		
		
		
			$sql_timebooking ="SELECT `booking_time_name` FROM `bookingtime` WHERE `booking_time_id` = '$idtimebooking' ";
			$result_timebooking = $conn->query($sql_timebooking);

				if ($result_timebooking->num_rows > 0) {
   					 // output data of each row
    			while($row = $result_timebooking->fetch_assoc()) {
				
				$bookingtimename = $row["booking_time_name"];
				
				echo "id: " .$idbooking  ."<br>";
				echo "วันที่: " .$bookingdate  ."<br>";
				echo "เวลา:" .$bookingtimename  ."<br>";
				
				}
			} else {
  			  echo "0 results";
			}

        
    }
} else {
    echo "0 results";
}



$conn->close();

?>

<!-- end checkbooking -->






	


</body>
</html>