<html>
<head>
    <meta charset="utf-8" />
    <title>Datepicker example</title>
    <script src="js/jquery-3.2.1.min.js" ></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form method="post" action="check.php">

    <input name="showdate" id="datepicker"  data-date-format="yyyy-mm-dd" >

    <script>
        $('#datepicker').datepicker({format:'yyyy-mm-dd'});
	
    </script>
<br>
<button type="submit">ส่งค่าไป</button>
    </form>
<hr>
 	
    
</body>
</html>