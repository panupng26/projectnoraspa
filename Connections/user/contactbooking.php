<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){

    Header("Location: c_form.php");

}else{?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
    <title>Norah Spa & Boxing Fitness</title>
    
    <style type="text/css">
	
		img{
		padding:15px;
	}
	
	 footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
		
		
	</style>
    
    
  </head>
  
  <body>
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
<!-- start หน้าร้าน -->
<div class="container">
<div class="row">
<div class="imgmenu">
    <img  src="../../img/picture1.jpg"  width="100%">
    </div>
  </div>
</div>

<!-- end หน้าร้าน -->



<!-- start contact -->
   
   
    <div class="container">
        <p>
  <a href="user_index.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้าหลัก</a>
   </p>
       <hr>
      <p>1.กดที่ปุ่ม "สั่งจอง" จะเด้งเข้าสู่หน้า "เข้าสู่ระบบ" </p>
        <p style="text-align: center;">
    <img src="../../img/1.png" width="100%">
  </p>
    <hr>

     <p>2.หน้าต่าง "เข้าสู่ระบบ" ถ้าเป็นสมาชิกอยู่แล้วให้กรอกไอดีและพาสเวิสแล้ว "กดเข้าสู่ระบบ" ได้เลย ถ้ายังไม่เป็นสมาชิกให้กด "สมัครสมาชิก" จะปรากฏหน้าต่างลงทะเบียน</p>
     <p style="text-align: center;">
     <img src="../../img/2.png" width="50%" >
   </p>

    <hr>

     <p>3.หน้าต่าง "ลงทะเบียน" ให้กรอกข้อมูลให้ครบ จากนั้นกด "สมัครสมาชิก" จะปรากฏหน้าแรก </p>
     <p style="text-align: center;">
     <img src="../../img/4.7.jpg" width="50%" >
   </p>

   <hr>

     <p>4.หลังจากนั้นก็ทำการ "เข้าสู่ระบบ" </p>
     <p style="text-align: center;">
     <img src="../../img/4.5.png" width="50%" >
   </p>
    
       <hr>

     <p>5.กดเข้าสู่ระบบ จะเห็นสถานะชื่อทางขวา จากนั้นก็กดปุ่ม "สั่งจอง" และจะเด้งมาหน้า "เลือกวันที่การจองบริการ" </p>
     <p style="text-align: center;">
     <img src="../../img/5.5.png" width="100%" >
   </p>
   <hr>

     <p>6.หน้าต่าง "เลือกวันที่การจองบริการ" จากนั้นกดที่รูปแผนที่เพื่อดูวันที่ต้องการจะจอง </p>
     <p style="text-align: center;">
     <img src="../../img/6.png" width="50%" >
   </p>
    <hr>

     <p>7.เลือกวันเสร็จแล้วกดปุ่ม "เช็คเวลาการจอง" จะปรากฏหน้าต่าง "เช็คเวลาการจอง"</p>
     <p style="text-align: center;">
     <img src="../../img/7.png" width="50%" >
   </p>
    <hr>

     <p>8.หน้าต่าง"เช็คเวลา" กดปุ่ม "คลิ๊ก" เพื่อดูสถานะการจอง"</p>
     <p style="text-align: center;">
     <img src="../../img/8.png" width="50%" >
   </p>
   <hr>

     <p>8.1.ถ้ามีคนจองแล้วจะแสดงคำว่า "ไม่ว่าง" ถ้ายังไม่มีคนจอง จะปรากฏหน้าต่าง "รายการที่จะจอง"</p>
     <p style="text-align: center;">
     <img src="../../img/8.1.png" width="50%" >
   </p>
    <hr>

     <p>9.กดปุ่ม "สามเหลี่ยมด้านขวา" เพื่อแสดงรายการของบริการ จากนั้นกด "ยืนยัน"</p>
     <p style="text-align: center;">
     <img src="../../img/9.png" width="50%" >
   </p>
    <hr>

     <p>10.จะปรากฏหน้าต่างถามเพื่อยืนยันการจอง ถ้ายืนยันกด "ยืนยัน" ถ้าไม่ กด "ยกเลิก"</p>
     <p style="text-align: center;">
     <img src="../../img/10.png" width="50%" >
   </p>
    <hr>
</div>
<div class="container">
     <p>11.เช็คยอดการจองได้ที่ กดปุ่ม "ยอดการจองก็จะแสดงหน้า"</p>
</div>
     <div class="col-md-12" >
     <p style="text-align: center;">
     <img src="../../img/11.jpg" width="75%" >
   </p>
 </div>
 <br>
 <div class="col-md-12">
<p style="text-align: center;">
     <img src="../../img/12.5.png" width="75%" >
   </p>
 </div>
   
<!-- end contact -->





<!-- start footer-->
<footer class="container-fluid text-center">
  <p>&copy;2018 ร้าน Norah Spa & Boxing Fitness</p>
</footer>
					
<!-- end  footer-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
  </body>
</html>
<?php }?>