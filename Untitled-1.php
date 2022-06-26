<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "noraspa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<form method="post" action="send.php">
<select name="category" id="category" maxlength="30" onchange="this.form.submit();">
    <option value=""></option>
    <?php
   

$sql_typeservice = "SELECT type_id, type_name FROM type";
$result_typeservice = $conn->query($sql_typeservice);

if ($result_typeservice->num_rows > 0) {
    // output data of each row
    while($row = $result_typeservice->fetch_assoc()) {
      
	$nametype = $row["type_name"];
	$idtype = $row["type_id"];
	$val = $_POST['type']?:'';

		  $selected = ($val == $row['type_name'] ? 'selected="selected"' : '');
        echo '<option value ="' . $row['type_name'] . '" '. $selected .'>' . $row['type_name'] . '</option>';

    }
}
    ?>
<button type="submit">ดูบริการ</button>
</form>
<span></br></br>
<label>บริการคือ</label>
</span>
 
	<?php
	
			$sql_service ="SELECT service_id, service_name, service_price FROM noraspa_service WHERE type_id = $idtype ";
			$result_service = $conn->query($sql_service);

				if ($result_service->num_rows > 0) {
   					 // output data of each row
    			while($row = $result_service->fetch_assoc()) {
				$idservice = $row["service_id"];
				$nameservice = $row["service_name"];
				$priceservice = $row["service_price"];
				
		?>		
				<?php 
					echo '<option value ="' . $row['service_name'] . '">' . $row['service_name'] . '</option>';
				?>
	
    		<?php	
				}
			} else {
  			  echo "0 results";
			}
			?>


<-- Start check -->
<?php

			 if ($showdate == $datebooking) {

                $sql_timebooking ="SELECT `booking_time_name` FROM `bookingtime` WHERE `booking_time_id` = '$idtimebooking' ";
                $result_timebooking = $conn->query($sql_timebooking);

                if ($result_timebooking->num_rows > 0) {
                     // output data of each row
                while($row = $result_timebooking->fetch_assoc()) {
                  $bookingtimename = $row["booking_time_name"];
                    
                        $sql_service ="SELECT `service_name` FROM `noraspa_service` WHERE `service_id` = '$idservice' ";
                        $result_service = $conn->query($sql_service);

                         if ($result_service->num_rows > 0) {
                           // output data of each row
                         while($row = $result_service->fetch_assoc()) {
                           $nameservice = $row["service_name"];

                                 $sql_member ="SELECT `member_firstname`,`member_lastname` FROM `login_member` WHERE `member_id` = '$idmember' ";
                                 $result_member = $conn->query($sql_member);

                                if ($result_member->num_rows > 0) {
                                    // output data of each row
                               while($row = $result_member->fetch_assoc()) {
                               $memberfirstname = $row["member_firstname"];
                               $memberlastname = $row["member_lastname"];

                               echo "id : ".$idbooking ."</br>" ;
                               echo "วันที่ : ".$datebooking ."</br>" ;
                               echo "เวลา : ".$bookingtimename ."</br>" ;
                               echo "ชื่อบริการ : ".$nameservice ."</br>";
                               echo "ชื่อ :".$memberfirstname ."นามสกุล :".$memberlastname."</br>" ;

                               }

                               }
                                

                          }

                          }
                    

                }

                }
                
            }

?><-- end check -->
<body>
</body>
</html>