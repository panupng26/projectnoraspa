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
     <title>ประเภท</title>
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



	<div class="container">
<?php
	include ('../../connect.php');
?>
	
<h1>ประเภทของบริการ <span class="badge badge-success">แสดงประเภท</span></h1>
	
	<div class="row">
		
	<div class="col-md-12">

	
	<p>
	<a href="admin_page.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้า admin</a>
			
	
			
	
				
	<a href="c_formaddtype.php" class="btn btn-primary" role="button" style="text-align:right;">เพิ่มข้อมูล</a>
	</p>
	
</div>
			
	<hr>
			
		<table class="table table-striped table-inverse" style="text-align:center">
				
		<tr>
					
			<td>ลำดับที่</td>
					
			<td>ประเภทบริการ</td>
			<td>เครื่องมือ</td>
		</tr>
				
		<tr>
		<?php
		$sql_type = "SELECT type_id, type_name FROM type";
		$result_type = $conn->query($sql_type);

		if ($result_type->num_rows > 0) {
    		// output data of each row
    		$no=1;
    	while($row = $result_type->fetch_assoc()) {
			$idtype = $row["type_id"];
			$nametype = $row["type_name"];
			
		?>


					
			<td><?php echo $no; ?></td>
					
			<td><?php echo $nametype; ?></td>
					
					
			<form method="post" action="delete.php">
			<td>
				
			<div class="btn-group mr-2" role="group" aria-label="First group">
						    							
			<input type="hidden" name="namedelete" value="<?php echo $idtype; ?>">
			<button type="submit"  class="btn btn-secondary" onclick="return confirm('ต้องการลบ <?php echo  $nametype ; ?> หรือไม่?')">ลบ</button>
										
			</div>
				
			</td>
			</form>
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