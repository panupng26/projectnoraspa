<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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
<form method="post" action="send.php">
<select name="category" id="category" maxlength="30" onchange="this.form.submit();">
    <option value=""></option>
    <?php
   

$sql_typeservice = "SELECT type_id, type_name FROM type";
$result_typeservice = $conn->query($sql_typeservice);

if ($result_typeservice->num_rows > 0) {
    // output data of each row
    while($row = $result_typeservice->fetch_assoc()) {
	$nametype = $row["type_name"];
	$idtype = $row["type_id"];
	$val = $_POST['type']?:'';

		  $selected = ($val == $row['type_name'] ? 'selected="selected"' : '');
        echo '<option value ="' . $row['type_id'] . '" '. $selected .'>' . $row['type_name'] . '</option>';

    }
}
    ?>


</form>
<span></br></br>

<body>
</body>
</html>