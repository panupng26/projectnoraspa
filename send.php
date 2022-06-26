<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
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
<?php
$idtype = $_POST['category'];
echo $idtype;
?>
<label>บริการคือ</label>
</span>
 			<select>
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
					echo '<option value ="' . $row['service_id'] . '">' . $row['service_name'] . '</option>';
				?>
	
    		<?php	
				}
			} else {
  			  echo "0 results";
			}
			?>
</select>
</body>
</html>