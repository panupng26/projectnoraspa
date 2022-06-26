<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){

	  Header("Location: c_form.php");

}else{?>
<!doctype html>
<html>
<head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" >

<title>User page</title>


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
        <a class="nav-link" href="index.html"> หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          สั่งจองคิว
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">นวด</a>
          
          <a class="dropdown-item" href="#">สปาตัว</a>
          
          
          <a class="dropdown-item" href="#">ทำหน้า</a>
          <a class="dropdown-item" href="#">เสริมสวย</a>
          <a class="dropdown-item" href="#">อบสมุนไพร</a>
          <a class="dropdown-item" href="#">บ็อกซิ่ง & ฟิตเนส</a>
        	</div>
          </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">ขั้นตอนการจอง</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="#">ติดต่อเรา</a>
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

<!-- start  -->

    
   


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
</body>
</html>
<?php }?>