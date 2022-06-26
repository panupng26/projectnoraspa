<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

    Header("Location: c_form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
    <title>เพิ่มบริการข้อมูล</title>
</head>
<body>

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

<div class="container"><br>
	<h1>เพิ่มข้อมูล <span class="badge badge-success">เพิ่มข้อมูลบริการ</span></h1>

    <div class="row">
    
         <div class="col-md-12">     
      
        <p style="text-align:right;">
        <a href="formaddservice.php" class="btn btn-danger" role="button">กลับสู่หน้าหลัก</a>
        </p>
        </div>
    </div>
    <hr>
       
 
<form name="frmaddservice" method="post" action="codeaddservice.php">
  <label>ประเภท</label> <br>
  
      
      <select name="type_id" class="form-control">
        <option selected>เลือกประเภท</option>
        
<?php
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "noraspa";

    // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
} 

?>
    

    <?php
   

      $sql_typeservice = "SELECT * FROM type";
      $result_typeservice = $conn->query($sql_typeservice);

      if ($result_typeservice->num_rows > 0) {
          // output data of each row
     while($row = $result_typeservice->fetch_assoc()) {
         $nametype = $row["type_name"];
         $idtype = $row["type_id"];
         
?>

<option value="<?php echo $idtype; ?>"> <?php echo $nametype; ?> </option>

<?php
      
    }
    ?>
     </select>
    <br>

    <?php
}

    ?>         
 

<label>ชื่อบริการ</label>
          
<input type="text"  name="service_name" class="form-control" placeholder="ใส่ชื่อบริการ" required>
  <br>
  <label>ราคา</label>
          
<input type="text"  name="service_price" class="form-control" placeholder="ใส่ราคา" required>
  <br>
<button type="submit" class="btn btn-primary">บันทึก</button>
</form>


	<script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" ></script>
</body>

</html>
<?php } ?>