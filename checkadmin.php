<html>
<head>
    <meta charset="utf-8" />
    <title>Datepicker example</title>
    <script src="js/jquery-3.2.1.min.js" ></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
        $sql_booking = "SELECT booking_id, booking_date, booking_time_id, service_id, member_id   FROM booking";
        $result_booking = $conn->query($sql_booking);

        if ($result_booking->num_rows > 0) {
            // output data of each row
        while($row = $result_booking->fetch_assoc()) {
            $idbooking = $row["booking_id"];
            $datebooking = $row["booking_date"];
            $idtimebooking = $row["booking_time_id"];
            $idservice = $row["service_id"];
            $showdate = $_POST["showdate"];


            if ($showdate == $datebooking) {

                $sql_timebooking ="SELECT `booking_time_name` FROM `bookingtime` WHERE `booking_time_id` = '$idtimebooking' ";
                $result_timebooking = $conn->query($sql_timebooking);

                if ($result_timebooking->num_rows > 0) {
                     // output data of each row
                while($row = $result_timebooking->fetch_assoc()) {
                $bookingtimename = $row["booking_time_name"];
                    
                        $sql_timebooking ="SELECT `service_name` FROM `noraspa_service` WHERE `service_id` = '$idtimebooking' ";
                        $result_timebooking = $conn->query($sql_timebooking);

                         if ($result_timebooking->num_rows > 0) {
                           // output data of each row
                         while($row = $result_timebooking->fetch_assoc()) {
                         $bookingtimename = $row["booking_time_name"];
                    
                
                    

                  }

            }
                    

                  }

            }
                
         }
            
      }
 }
        ?>
    
    



   
</body>
</html>