<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{
include('../../connectadd.php');

$date = $_POST['bookdate'];
$time = $_POST['booktime'];
$idservice = $_POST['category'];
$status = $_POST['status'];


$sql1="INSERT INTO booking values ('','".$_POST['bookdate']."','".$_POST['booktime']."','".$_POST['category']."','".$_SESSION["UserID"]."','".$_POST['status']."')";
			
			$query1=mysqli_query($conn, $sql1);
			if($query1){
?>
<script type="text/javascript">
	window.location.href = "admin_page.php";
</script>
<?php
				}
				else{
					echo 'บันทึกข้อมูลไม่สำเร็จ'.'</br>';
					echo '<a href="checkbookingadmin.php">กลับไปหน้าสมัครสมาชิก</a>';
					}
							


}
?>