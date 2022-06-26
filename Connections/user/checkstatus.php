<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<html>
<head>
 <meta charset="utf-8" />
 <title>เช็คเวลาการจอง</title>

</head>
<body>
<?php
include('../../connect.php'); 
?>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
   
  <!-- start script calender -->

   <script src="../../js/jquery-3.2.1.min.js" ></script>
    <script src="../../js/gijgo.min.js" type="text/javascript"></script>
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" >


<!-- start เมนู -->


   
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

<!-- end เมนู -->

<br><br>
<div class="container" style="text-align: center;">




<?php

	$idbookingtime = $_GET["statusidtime"];
	$showdate = $_GET["statusdate"];
	$timename = $_GET["timename"];

	$sql_booking = "SELECT * FROM booking WHERE booking_date = '$showdate' and booking_time_id = '$idbookingtime' " ;
	$result_booking = $conn->query($sql_booking);

	if ($result_booking->num_rows == 1) {
    	// output data of each row
	
		
    	echo "<script> window.alert ('วันที่ :"."$showdate"."เวลา :"."$timename"." "."ไม่ว่าง') </script>";
    	echo "<script> window.location.href='checkadmin_get.php?date=<?php echo $showdate ;?>'</script>";

	}else{
  ?>
  <br>
   <h1> <?php		echo ("วันที่ : ".'<span class="badge badge-success">'."$showdate".'</span>'." เวลา :".' <span class="badge badge-success">'." $timename".'</span>'." "."ว่าง"); ?></h1>

<form method="post" action="addbooking.php">
  <input type="hidden" name="bookdate" value="<?php echo $showdate;?>">
  <input type="hidden" name="booktime" value="<?php echo $idbookingtime;?>">
  <br>
            <select name="category" class="form-control">
            <option value=""></option>
<?php
        $sql_typeservice = "SELECT type_id, type_name FROM type";
        $result_typeservice = $conn->query($sql_typeservice);

      if ($result_typeservice->num_rows > 0) {
            // output data of each row
          while($row = $result_typeservice->fetch_assoc()) {
        $nametype = $row["type_name"];
        $idtype = $row["type_id"];
        $val = $_POST['type'];

?>

<?php
          $sql_service ="SELECT service_id, service_name, service_price FROM noraspa_service WHERE type_id = $idtype ";
          $result_service = $conn->query($sql_service);

          if ($result_service->num_rows > 0) {
               // output data of each row
              while($row = $result_service->fetch_assoc()) {
            $idservice = $row["service_id"];
            $nameservice = $row["service_name"];
            $priceservice = $row["service_price"];
            
            
?>
                   
                   <option value="<?php echo $idservice;?>"><?php echo $nameservice;?> ราคา <?php echo number_format($priceservice) ;?> บาท</option>

                    

<?php   
            }
          }
      
        }
  
      }

?>
        </select>
        <br>
        <input type="hidden" name="status" value=1>
        <button type="submit" required name="submit"  onclick="return confirm('ยืนยันว่าต้องการจองใช่หรือไม่')" class="btn btn-outline-primary btn-block">ยืนยัน</button>


</form>
<?php
	}
?>
</div>

    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>


</body>
</html>
<?php }?>