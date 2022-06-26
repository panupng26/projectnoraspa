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
     <title>เช็ครายชื่อสมาชิก</title>
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
	
<h1>รายชื่อ <span class="badge badge-success">สมาชิก</span></h1>
	
	<div class="row">
		
	<div class="col-md-12">

	
	<p>
	<a href="admin_page.php" class="btn btn-primary" role="button" style="text-align:left;">กลับสู่หน้า admin</a>
</p>
			
	
				
	
	
</div>
			
	<hr>
			
		<table class="table table-striped table-inverse" style="text-align:center">
				
		<tr>
					
			<td>ลำดับที่</td>
					
			<td>ชื่อ</td>
			<td>นามสกุล</td>
			<td>ID</td>
			<td>password</td>
			<td>เบอร์โทรศัพท์</td>
			<td>ระดับสมาชิก</td>
			<td> </td>
		</tr>
				
		<tr>
		<?php
		$sql_member = "SELECT member_id, member_firstname, member_lastname, member_username, member_password, member_tel ,member_level FROM login_member";
		$result_member = $conn->query($sql_member);

		if ($result_member->num_rows > 0) {
    		// output data of each row
    		$no = 1 ;
    	while($row = $result_member->fetch_assoc()) {
			$idmember = $row["member_id"];
			$namemember = $row["member_firstname"];
			$lastnamemember = $row["member_lastname"];
			$usernamemember = $row["member_username"];
			$passwordmember = $row["member_password"];
			$telmember = $row["member_tel"];
			$levelmember = $row["member_level"];
			$_SESSION["Userlevel"] = $row["member_level"];
		?>


					
			<td><?php echo $no ; ?></td>
					
			<td><?php echo $namemember; ?></td>

			<td><?php echo $lastnamemember; ?></td>

			<td><?php echo $usernamemember; ?></td>

			<td><?php echo $passwordmember; ?></td>

			<td><?php echo $telmember; ?></td>

			<td><?php if($_SESSION["Userlevel"]=="500"){
						echo "Admin";
					}	else {
						echo "Member";
					}
			 	?>
			 	
			 </td>
					
					
			
			<td>
				<form method="post" action="deletemember.php">		
			<div class="btn-group mr-2" role="group" aria-label="First group">
						    
			
							
				<input type="hidden" name="namedeletemember" value="<?php echo $idmember; ?>">
				<button type="submit"  class="btn btn-secondary" onclick="return confirm('ต้องการลบ <?php echo $namemember ." ". $lastnamemember; ?>   หรือไม่?')">ลบ</button>
					
					
			</div>
				</form>
			</td>
			
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