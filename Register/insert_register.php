

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($_POST['member_firstname']!='' or $_POST['member_lastname']!='' or $_POST['member_username']!='' or $_POST['member_password']!='' or $_POST['member_tel']!=''){
	include ('connect.php');
	$sql='select * from `login_member` where `member_username` = "'.$_POST['member_username'].'" ' ;
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num>=1){
						echo "<script>";
                        echo "alert(\" ชื่อผู้ใช้งานนี้มีคนใช้แล้ว\");"; 
                        echo 'window.location.href = "form_register.php"';
                    echo "</script>";
		}
		else{
			
			$sql1="INSERT INTO login_member values ('','".$_POST['member_firstname']."','".$_POST['member_lastname']."','".$_POST['member_username']."','".$_POST['member_password']."','".$_POST['member_tel']."','".$_POST['member_level']."')";
			
			}
			$query1=mysql_query($sql1);
			if($query1){
					 echo "<script>";
                        echo "alert(\" สมัครสมาชิกสำเร็จ\");"; 
                        echo 'window.location.href = "../Connections/c_form.php"';
                    echo "</script>";
	
				}
				else{
					echo "<script>";
                        echo "alert(\" สมัครสมาชิกไม่สำเร็จ \");"; 
                        echo 'window.location.href = "form_register.php"';
                    echo "</script>";
					}
							}
else {
					echo "<script>";
                        echo "alert(\" กรุณากรอกข้อมูลให้ครบ\");"; 
                        echo 'window.location.href = "form_register.php"';
                    echo "</script>";
}
?>
</body>
</html>