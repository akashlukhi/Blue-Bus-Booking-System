<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        session_start();
        if(empty($_SESSION['username'])){
			header('Location: index.php');
			exit;
		}
        $mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
        if($mysqli->connect_error){
            die("Connection Failed: ".$mysqli->connect_error);
        }
        $s = $_GET['seat'];
        $user= $_SESSION['username'];
        $plate_no = $_GET['key'];
        $mysqli->query("DELETE FROM `passenger_detail` WHERE `seat_no`='$s' && `booked_by`='$user' && `bus_plate_no`='$plate_no'");
        $mysqli->query("DELETE FROM `booked_seat` WHERE `seat_no`='$s' && `user_name`='$user' && `plate_no`='$plate_no'");
        $result = $mysqli->query("SELECT seats from bus_info WHERE plate_no='$plate_no'");
        $row = mysqli_fetch_assoc($result);
        $t = $row['seats'];
        $str = substr($t,5);
        $ans = str_replace($s,'',$str);        
        $mysqli->query("UPDATE bus_info SET `SEATS`='$ans' WHERE `plate_no` = '$plate_no'");
        header('Location: cancel.php');
		exit;
       ?>
</body>
</html>