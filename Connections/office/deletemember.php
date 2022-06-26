<?php
include ('../../connect.php'); ?>
			
<?php
	$idmember = $_POST['namedeletemember'];
	
					$sql = "DELETE FROM login_member WHERE member_id='$idmember'";

					if ($conn->query($sql) === TRUE) {
    				
    				?>

    			<script type="text/javascript">
					window.location.href = "formshowmember.php";
				</script>

    				<?php
					} else {
    				echo "ลบข้อมูลไม่สำเร็จ " . $conn->error;
			}

$conn->close();
?>