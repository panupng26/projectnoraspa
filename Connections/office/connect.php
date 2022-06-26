<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db_name='noraspa';
	mysql_connect($host,$user,$pass)or die ('ติดต่อฐานข้อมูลไม่ได้');
	mysql_select_db($db_name)or die ('ไม่พบฐานข้อมูล');
	mysql_query('SET NAMES UTF8');
?>
</body>
</html>