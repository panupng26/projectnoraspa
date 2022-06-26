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
    

  <!-- start script calender -->

   <script src="../../js/jquery-3.2.1.min.js" ></script>
    <script src="../../js/gijgo.min.js" type="text/javascript"></script>
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" >
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

<?php
  date_default_timezone_set("Asia/Bangkok");
  $showdatechk = date("Y-m-d");

  ?>

   <script language="javascript"> 
    function fncSubmit()
    {
    if(document.form5.showdate.value < document.form5.showdatechk.value){ 
      alert('เกินวันที่จองมาแล้ว');
      document.form5.showdatechk.focus();     
      return false;
    }
      document.form5.submit();
    }  
</script>

  
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


<div class="container" >
    <p>
  <a href="user_index.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้าหลัก</a>
      </p>
<hr>
<h2> การจองบริการ   <span class="badge badge-success">NorahSpa Boxing & Fitness</span></h2> 
<br>

<form name="form5" method="post" action="checkadmin.php" onsubmit="return fncSubmit();">

    <input type="hidden"  name="showdatechk" value="<?php echo $showdatechk ; ?>" >

    <input  name="showdate"  id="datepicker"  data-date-format="yyyy-mm-dd"  required>

    <script>
        $('#datepicker').datepicker({format:'yyyy-mm-dd'});
  
    </script>
    
<br>

<button type="submit" class="btn btn-outline-success" onclick="return confirm('ยืนยันว่าจองวัน ')">เช็คเวลาการจอง</button>
    </form>
<hr>
</div>
    
    


<!-- end ข้อมูลข่าวสาร 3 -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
  </body>
</html>
<?php }?>