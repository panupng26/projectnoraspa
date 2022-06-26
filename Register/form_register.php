<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	
	<title>ลงทะเบียน Norahspa</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<style type="text/css">
	body{
		background-color:#eee;
		padding: 10px;
		}
	
	</style>
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
  <br><br>
<div class="container" style="text-align:center">
	<div class="row">
    	<div class="col-md-12">
         <a href="../index.php"><img src="../img/picture1.jpg" width="100%"></a>
        
        </div>
    </div>
    <hr />
    <br />
	
	<h1>ลงทะเบียน</h1>
  <script language="javascript"> 
    function fncSubmit()
    {
    if(document.form1.member_password.value != document.form1.member_password1.value){ 
      alert('รหัสไม่ตรงกัน');
      document.form1.member_password1.focus();     
      return false;
    }
      document.form1.submit();
    }  
</script>
</div>
    <form name="form1" method="post" action="insert_register.php" OnSubmit="return fncSubmit();">
    <p style="text-indent: 35em;"> ชื่อ  : &emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          <input type="text"    required name="member_firstname" placeholder="ใส่ชื่อ">
        </p>
        
        <p style="text-indent: 35em;"> นามสกุล : &emsp; &nbsp; &nbsp; 
          <input type="text"    required name="member_lastname" placeholder="ใส่นามสกุล">
        </p>
    
     <p style="text-indent: 35em;"> เบอร์โทร : &nbsp; &nbsp; &nbsp; &nbsp; 
          <input type="text"    required name="member_tel" placeholder="ใส่เบอร์โทร">
        </p>
    
    
    <p style="text-indent: 35em;"> ชื่อผู้ใช้ : &emsp;  &nbsp; &nbsp; &nbsp;
          <input type="text"    required name="member_username" placeholder="ใส่ชื่อผู้ใช้">
        </p>
        <p style="text-indent: 35em;"> รหัสผ่าน : &emsp; &nbsp; &nbsp;
          <input type="password"   required name="member_password" placeholder="ใส่พาสเวริ์ด">
        </p>
        <p style="text-indent: 35em;"> ยืนยันรหัสผ่าน : 
          <input type="password"   required name="member_password1" placeholder="ใส่พาสเวริ์ดยืนยัน">

        </p>
        <p>

        </p>
         <p style="text-align: center;">
         	<input type="hidden" name="member_level" value=100>
          <button type="submit" class="btn btn-outline-primary btn-lg " >สมัครสมาชิก</button>
          &nbsp;&nbsp;
          
          
          
          <br>
        </p>


    </form>
   
  
    

    
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" ></script>
</body>
</html>