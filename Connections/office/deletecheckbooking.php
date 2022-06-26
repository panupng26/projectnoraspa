<?php
include ('../../connect.php'); ?>
			
<?php
	$idbooking = $_POST['deletecheckbooking'];
	
					$sql = "DELETE FROM booking WHERE booking_id='$idbooking'";

					if ($conn->query($sql) === TRUE) {
    				
    				?>
					<script type="text/javascript">
						window.location.href = "admin_page.php";
					</script>

    				<?php
					} else {
    				echo "ลบข้อมูลไม่สำเร็จ " . $conn->error;
			}

$conn->close();
?>