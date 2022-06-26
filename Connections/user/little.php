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
<br>
<div class="container">
  <h2>บุคลากรภายในร้าน</h2>
  <hr>
  <div class="row">
    <div class="col-md-3">
      <img  src="../../img/b1.jpg"  width="75%">
    </div>

    <div class="col-md-9">
      <b> <br>
        ชื่อ : นางสาวศันสนีย์ พรหมเดช <br>
        ตำแหน่ง : เจ้าของร้าน

      </a></b>      
    </div>
  </div>

   <div class="row">
    <div class="col-md-3">
      <img  src="../../img/b2.jpg"  width="75%">
    </div>

    <div class="col-md-9">
      <b><br>
        ชื่อ : นางสายธาร นพคุณ <br>
        ตำแหน่ง : พนักงาน
      </b>
      
    </div>
  </div>

   <div class="row">
    <div class="col-md-3">
      <img  src="../../img/b3.jpg"  width="75%">
    </div>

    <div class="col-md-9">

      <b> <br>
      ชื่อ : นางสาวรัตนาวดี ปานแก้ว <br>
      ตำแหน่ง : พนักงาน

    </b>
      
    </div>
  </div>

 <div class="row">
    <div class="col-md-3">
      <img  src="../../img/b4.jpg"  width="75%">
    </div>

    <div class="col-md-9">

      <b><br>
        ชื่อ : นางสาวอารียา ศันกาณู <br>
        ตำแหน่ง : พนักงาน

      </b>
      
    </div>
  </div>

   <div class="row">
    <div class="col-md-3">
      <img  src="../../img/b7.jpg"  width="75%">
    </div>

    <div class="col-md-9">
      <b><br>
        ชื่อ : นายทวีศักดิ์ นพคุณ <br>
        ตำแหน่ง : พนักงาน

      </b>
      
    </div>
  </div>
</div>

    
    


<!-- end ข้อมูลข่าวสาร 3 -->





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
<?php } ?>