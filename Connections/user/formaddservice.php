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
     <title>บริการ</title>
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



	<div class="container">
<?php
	include ('../../connect.php');

?>
<br><br><br>
	
<h1> บริการต่างๆ <span class="badge badge-success">แสดงบริการ</span></h1> 
	
	<div class="row">
		
	<div class="col-md-12">

	
	<p>
	<a href="user_index.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้าหลัก</a>
			
	
			
	
				
	
	</p>
	
</div>
			
	<hr>
			
		<table class="table table-striped table-inverse" style="text-align:center">
				
		<tr>
					
			<td>ลำดับที่</td>
					
			<td>ชื่อบริการ</td>
			<td>ราคา</td>
			
		</tr>
				
		<tr>
		<?php
		$sql_service = "SELECT service_id, service_name,service_price FROM noraspa_service";
		$result_service = $conn->query($sql_service);

		if ($result_service->num_rows > 0) {
    		// output data of each row
    		$no = 1 ;
    	while($row = $result_service->fetch_assoc()) {
			$idservice = $row["service_id"];
			$nameservice = $row["service_name"];
			$priceservice = $row["service_price"];
		
		?>


					
			<td><?php echo $no ; ?></td>
					
			<td><?php echo $nameservice; ?></td>
			
			<td><?php  echo number_format($priceservice) ." บาท" ; ?></td>
					
			
			
					
					
			
				
			
			
		</tr>
	
<?php
			$no++;
				
			}
		
		}else{
			
			echo "NO data!";
		
			}
	?>			
			
		</table>		

		<?php 
			$conn->close();
		?>	
		
</div>
	</div>
</div>
</body>
</html>
<?php } ?>