<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{
include('../../connect.php');


$status = $_GET['status'];
$idbooking = $_GET['idbooking'];


$sql = "UPDATE booking SET status='3' WHERE booking_id = $idbooking";

if ($conn->query($sql) === TRUE) {
   				    echo "<script>";
                        echo "alert(\" ยกเลิกบริการเรียบร้อย\");"; 
                        echo 'window.location.href = "admin_page.php"';
                    echo "</script>";
    ?>
    
<?php
} else {
    echo " " . $conn->error;
}


}
?>