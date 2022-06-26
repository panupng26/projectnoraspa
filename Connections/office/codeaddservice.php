<?php
if($_POST['service_name']!='' or $_POST['service_price']!=''or $_POST['type_id']!=''){
	include ('../../connectadd.php');
	$sql='select * from `noraspa_service` where `service_name` = "'.$_POST['service_name'].'" ' ;
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num>=1){
		echo 'ชื่อประเภทนี้ใช้งานแล้ว'.'</br>';
		echo '<a href="formaddservice.php">กลับไปหน้าฟอร์มเพิ่มประเภท</a>';
		}
		else{
			
			$sql1="INSERT INTO noraspa_service values ('','".$_POST['service_name']."','".$_POST['type_id']."','".$_POST['service_price']."')";
			
			}
			$query1=mysql_query($sql1);
			if($query1){
				
?>
				<script type="text/javascript">
					window.location.href = "formaddservice.php";
				</script>
				<?php
				}
				else{
					echo 'บันทึกข้อมูลไม่สำเร็จ'.'</br>';
					echo '<a href="formaddservice.php">กลับไปหน้าเพิ่มบริการข้อมูล</a>';
					}
							}
else {
	echo 'กรุณากรอกข้อมูลให้ครบ'.'</br>';
	echo '<a href="formaddservice.php">';
}
?>