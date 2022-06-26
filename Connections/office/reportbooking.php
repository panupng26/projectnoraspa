<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
    <script src="../../js/jquery-3.2.1.min.js" ></script>
    <script src="../../js/gijgo.min.js" type="text/javascript"></script>
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" >
	<title>Serch Report</title>
</head>
<body>
<!-- -->
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
<div class="container">
  <br>
<h1> รายงานการจอง    <span class="badge badge-success">NorahSpa Boxing & Fitness</span></h1> 
<br>

<form name="form5" method="post" action="checkreport.php" >

    

    <input  name="datestart"  id="datepicker"  data-date-format="yyyy-mm-dd"  required>

    <script>
        $('#datepicker').datepicker({format:'yyyy-mm-dd'});
  
    </script>
<br>
<h3>ถึง</h3>

<br>


    <input  name="dateend"  id="datepicker1"  data-date-format="yyyy-mm-dd"  required>

    <script>

        $('#datepicker1').datepicker({format:'yyyy-mm-dd'});
  
    </script>
<br>
    
<br>


<div class="form-check">
  <input class="form-check-input" type="radio" name="status"  value="1" checked>
  <label class="form-check-label" >
    ยังไม่ชำระเงิน
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status"  value="2">
  <label class="form-check-label" >
    ชำระเงินแล้ว
      </label>
</div>
<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="status"  value="3">
  <label class="form-check-label" >
    ยกเลิกบริการแล้ว
  </label>
</div>
<br>

<button type="submit" class="btn btn-outline-success" >เช็คเวลาการจอง</button>
</form>
</div>

     <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
</body>
</html>
<?php } ?>