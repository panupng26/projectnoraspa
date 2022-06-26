<?php
if($_POST['type_name']!='' ){
	include ('../../connectadd.php');
	$sql='select * from `type` where `type_name` = "'.$_POST['type_name'].'" ' ;
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num>=1){
		echo 'ชื่อประเภทนี้ใช้งานแล้ว'.'</br>';
		echo '<a href="formaddtype.php">กลับไปหน้าฟอร์มเพิ่มประเภท</a>';
		}
		else{
			
			$sql1="INSERT INTO type values ('','".$_POST['type_name']."')";
			
			}
			$query1=mysql_query($sql1);
			if($query1){
?>
			<script type="text/javascript">
				window.location.href = "formaddtype.php";
			</script>
<?php
				}
				else{
					echo 'บันทึกข้อมูลไม่สำเร็จ'.'</br>';
					echo '<a href="formaddtype.php">กลับไปหน้าเพิ่มประเถทข้อมูล</a>';
					}
							}
else {
	echo 'กรุณากรอกข้อมูลให้ครบ'.'</br>';
	echo '<a href="formaddtype.php">';
}
?>