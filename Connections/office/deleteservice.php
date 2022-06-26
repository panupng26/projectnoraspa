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
} ?>
			
<?php
	$idservice = $_POST['namedeleteservice'];
	
					$sql = "DELETE FROM noraspa_service WHERE service_id='$idservice'";

					if ($conn->query($sql) === TRUE) {
    			
    				?>

    				<script type="text/javascript">
						window.location.href = "formaddservice.php";
					</script>
    				<?php
					} else {
    				echo "ลบข้อมูลไม่สำเร็จ " . $conn->error;
			}

$conn->close();
?>