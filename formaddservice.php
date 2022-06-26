
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
     <title>บริการ</title>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #B8860B;">
  <a class="navbar-brand" href="index.php">Norah Spa & Boxing Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link dis" href="index.php"> หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item ">
        <a class="nav-link" href="Connections/c_form.php">สั่งจอง</a>
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
      
    </ul>

     <ul class="navbar-nav ">
     <li class="nav-item">
        <a class="nav-link" href="Register/form_register.php">สมัครสมาชิก</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="Connections/c_form.php">เข้าสู่ระบบ</a>
      </li>
      </ul>
  </div>
  
</nav>


	<div class="container">
<?php
	include ('connect.php');

?>
<br><br><br>
	
<h1> บริการต่างๆ <span class="badge badge-success">แสดงบริการ</span></h1> 
	
	<div class="row">
		
	<div class="col-md-12">

	
	<p>
	<a href="index.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้าหลัก</a>
			
	
			
	
				
	
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
