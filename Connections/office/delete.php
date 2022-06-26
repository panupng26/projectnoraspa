<?php
include ('../../connect.php');
 ?>
			
<?php
	$idtype = $_POST['namedelete'];
	
					$sql = "DELETE FROM type WHERE type_id='$idtype'";

					if ($conn->query($sql) === TRUE) {
    				
    				?>
    				<script type="text/javascript">
						window.location.href = "formaddtype.php";
					</script>
    				

    				<?php
					} else {
    				echo "ลบข้อมูลไม่สำเร็จ " . $conn->error;
			}

$conn->close();
?>