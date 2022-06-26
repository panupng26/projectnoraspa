<?php session_start();?>
<!doctype html>
<html>
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	
	<title>เข้าสู่ระบบ Norahspa</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

<!-- start navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #B8860B;">
  <a class="navbar-brand" href="../index.php">Norah Spa & Boxing Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link dis" href="../index.php"> หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      
 
 
    
    </ul>
     
  </div>
  
</nav>
<!-- end navbar -->
<br><br>
<!-- start form login-->
<div class="container" style="text-align:center">
	<div class="row">
    	<div class="col-md-12">
        <a href="../index.php"><img src="../img/picture1.jpg" width="100%"></a>
        
        <hr>
    	</div>
    </div>
      <form name="frmlogin"  method="post" action="c_login.php">
        <p> </p>
        <p><b> เข้าสู่ระบบ</b></p>
        <p> ชื่อผู้ใช้  &nbsp;
          <input type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน 
          <input type="password"   id="Password"required name="Password" placeholder="Password">
        </p>

        <div class="row">
          <div class="col-md-12">
           &emsp;&emsp;&emsp;&nbsp;
          <button type="submit" class="btn btn-outline-primary btn-md " >เข้าสู่ระบบ</button>
          &nbsp;&nbsp;
          
          </form>
          
         <button class="btn btn-outline-primary btn-md " ><a href="../Register/form_register.php">สมัครสมาชิก</a></button>
          </div>

        </div>
</div>
<!-- end form login-->
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" ></script>
</body>
</html>