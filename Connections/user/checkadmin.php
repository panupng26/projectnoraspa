<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<html>
<head>
    <meta charset="utf-8" />
    <title>การจองNorahspa Boxing & Fitness</title>
    <script src="../../js/jquery-3.2.1.min.js" ></script>
    <script src="../../js/gijgo.min.js" type="text/javascript"></script>
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="../../css/bootstrap.min.css" >
</head>
<body>
	

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #B8860B;">
  <a class="navbar-brand" href="#">Norah Spa & Boxing Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user_index.php"> หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item dropdown">
       <a class="nav-link" href="bookinguser.php">สั่งจอง</a>
       
          </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contactbooking.php">ขั้นตอนการจอง</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formaddservice.php">ชื่อบริการ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="little.php">เกี่ยวกับร้าน</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="totalbooking.php">ยอดการสั่งจอง</a>
      </li>
    </ul>
    
     <ul class="navbar-nav ">
     <li class="nav-item">
       <strong>สวัสดีคุณ </strong> : 
      <?php echo ($_SESSION['User']);?> <!--show detail login-->
      <?php //session_destroy();?> &nbsp;</li>      
    
   
      <li class="nav-item">
        <strong>
    <a href="../c_logout.php"> Log out</a></strong>
     </li>
      </ul>
  </div>
  
</nav>

<?php
  date_default_timezone_set("Asia/Bangkok");
  $timenow = date("H:i:s");
  $datenow = date("Y-m-d");
  
	$showdate = $_POST["showdate"];



?>
<br><br><br>
<div class="container">
<h1>ตารางเช็คเวลา <span class="badge badge-success"> การจอง</span> ในวันที่ <?php echo $showdate;?></h1>
<hr>
			
    <div class="row">
      <div class="col-md-12">
        <p>
  <a href="bookinguser.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้าการจอง</a>
</p>

      </div>
      

    </div>
		<table class="table table-striped table-inverse" style="text-align:center">
			<tr>
				<td>เวลาการจอง</td>
				<td>สถานะการจอง</td>
			</tr>

<?php
include('../../connect.php'); 
?>

<?php

           
$sql_bookingtime = "SELECT booking_time_id, booking_time_name, timechk FROM bookingtime";
$result_bookingtime = $conn->query($sql_bookingtime);

if ($result_bookingtime->num_rows > 0) {
    // output data of each row
	

    while($row = $result_bookingtime->fetch_assoc()) {
		$idbookingtime = $row["booking_time_id"];
		$namebookingtime = $row["booking_time_name"];
    $timechk = $row["timechk"];
	    
?>
	
			<tr>
			<td><?php echo $namebookingtime; ?>  </td>

			<td>
			
<?php 
      if($showdate>$datenow){
?>
          <a href="checkstatus.php?statusidtime=<?php echo $idbookingtime ;?>&statusdate=<?php echo $showdate ;?> &timename=<?php echo $namebookingtime ;?> ">คลิก</a>
<?php
      }else{

        if ($timenow >= $timechk){

          echo "เกินเวลาจอง";

        }else{

?>
				<a href="checkstatus.php?statusidtime=<?php echo $idbookingtime ;?>&statusdate=<?php echo $showdate ;?> &timename=<?php echo $namebookingtime ;?> ">คลิก</a>
      

<?php 
        }
      }
?>
			</td>
	<?php        
   		}
   				 
} else { 
					
} 
?>

<tr></table>
</div>


</body>
</html>
<?php }?>