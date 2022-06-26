<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!doctype html>
<html>
<head>

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
   
  <!-- start script calender -->

   <script src="../../js/jquery-3.2.1.min.js" ></script>
    <script src="../../js/gijgo.min.js" type="text/javascript"></script>
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" >

    <!-- end script calender -->
   
    
   
<title>Admin NorahSpa Boxing And Fitness</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<!-- start เมนู -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #B8860B;">
  <a class="navbar-brand" href="admin_page.php">Norah Spa & Boxing Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin_page.php"> หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item dropdown">
        <a class="nav-link" href="formaddtype.php">ประเภท</a>
       
          </li>
      
      <li class="nav-item">
        <a class="nav-link" href="formaddservice.php">บริการ</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="formshowmember.php">รายชื่อสมาชิก</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="checkbookingadmin.php">การจอง</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="reportbooking.php">รายงาน</a>
      </li>
    </ul>
    
     <ul class="navbar-nav ">
     <li class="nav-item">
       <strong>สวัสดีผู้ดูแลระบบ</strong> : 
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


<?php
  include('../../connect.php');

?>
  <div class="container">
<h1> แสดงรายละเอียดการจอง <span class="badge badge-success"></span></h1> 
  
  <div class="row">
    
  <div class="col-md-12">

  <hr>
  
</div>
</div>
      
  
      
    <table class="table table-striped table-inverse" style="text-align:center" >
        
    <tr>
          
      <td>ลำดับที่</td>
      <td>วันที่</td>
      <td>เวลา</td>
      <td>ชื่อบริการ</td>
      <td>ราคา</td>
      <td>ชื่อ - นามสกุล</td>
      <td>เบอร์โทร</td>
      <td>สถานะ</td>
      <td>เครื่องมือ</td>
    </tr>
        
    <tr>
    <?php
    date_default_timezone_set("Asia/Bangkok");
    $datenow = date("Y-m-d") ;

    $sql_booking = "SELECT * FROM booking WHERE  booking_date = '$datenow'  ";
    $result_booking = $conn->query($sql_booking);
    if ($result_booking->num_rows > 0) {
        // output data of each row
        $no = 1 ;
      while($row = $result_booking->fetch_assoc()) {
      $idbooking = $row["booking_id"];
      $datebooking = $row["booking_date"];
      $idtimebooking = $row["booking_time_id"];
      $idservice = $row["service_id"];
      $idmember = $row["member_id"];
      $status = $row['status'];
          
    ?>
    <?php
    

       $sql_timebooking ="SELECT `booking_time_name` FROM `bookingtime`  WHERE `booking_time_id` = '$idtimebooking' ";

                $result_timebooking = $conn->query($sql_timebooking);

                if ($result_timebooking->num_rows > 0) {
                     // output data of each row
                while($row = $result_timebooking->fetch_assoc()) {
                  $bookingtimename = $row["booking_time_name"];
                    
                        $sql_service ="SELECT service_name, service_price FROM `noraspa_service` WHERE `service_id` = '$idservice' ";
                        $result_service = $conn->query($sql_service);

                         if ($result_service->num_rows > 0) {
                           // output data of each row
                         while($row = $result_service->fetch_assoc()) {
                           $nameservice = $row["service_name"];
                           $priceservice = $row["service_price"];

                                 $sql_member ="SELECT `member_firstname`,`member_lastname`,`member_tel` FROM `login_member` WHERE `member_id` = '$idmember' ";
                                 $result_member = $conn->query($sql_member);

                                if ($result_member->num_rows > 0) {
                                    // output data of each row
                               while($row = $result_member->fetch_assoc()) {
                               $memberfirstname = $row["member_firstname"];
                               $memberlastname = $row["member_lastname"];
                               $membertel = $row["member_tel"];
?>
                              <td> <?php echo $no  ; ?></td>
                              <td> <?php echo $datebooking  ;?></td>
                              <td> <?php echo $bookingtimename  ;?></td>
                              <td> <?php echo $nameservice ;?></td>
                              <td> <?php echo $priceservice ;?></td>
                              <td> <?php echo $memberfirstname ." ".$memberlastname ;?></td>
                              <td> <?php echo $membertel ;?></td>

                               <?php
                               }

                               }
                                

                          }

                          }
                    

                }

                }
                ?>

          
      
      
      <td>
        
          <?php 
if ($status == 1) {
  $statustext = "ยังไม่ชำระเงิน" ;
  # code...
}elseif ($status == 2) {
  $statustext = "ชำระเงินเรียบร้อยแล้ว" ;
  # code...
}elseif ($status == 3){
  $statustext = "ยกเลิกบริการ";
}
echo $statustext;
          ?>

</td>

<td>


      
      
                
  <div class="btn-group" role="group" aria-label="Basic example">
   <a href="updatestatus.php?status=<?php echo $status ;?> &idbooking=<?php echo $idbooking ;?>" class="btn btn-outline-danger" onclick="return confirm('ต้องการที่จะชำระเงิน  หรือไม่?')">ชำระบริการ</a>

      <form method="post" action="deletecheckbooking.php">    
      <div class="btn-group mr-2" role="group" aria-label="First group">  
      <a href="updatestatus1.php?status=<?php echo $status ;?> &idbooking=<?php echo $idbooking ;?>" class="btn btn-outline-warning" onclick="return confirm('ต้องการยกเลิก <?php echo  "เวลา :".$datebooking." "."คุณ : ".$memberfirstname ; ?> หรือไม่?')">ยกเลิกบริการ</a>
          
          
      </div>
        </form>
        </div>
      </td>
      
    </tr>
  
<?php
      $no++;
        
      }
    
    }else{
      
      echo '<h1>'."ยังไม่มีคนใช้บริการ".'</h1>';
    
      }
  ?>      
      
    </table>    




    <?php 
      $conn->close();
    ?>  
    
</div>
  </div></div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
</body>
</html>
<?php }?>