<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db_name='noraspa';
	$conn= mysqli_connect($host,$user,$pass,$db_name)or die ('ติดต่อฐานข้อมูลไม่ได้');
	// mysql_select_db($db_name)or die ('ไม่พบฐานข้อมูล');
	// mysql_query('SET NAMES UTF8');
?>