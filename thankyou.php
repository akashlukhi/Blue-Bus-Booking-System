<!DOCTYPE html>
<html>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

    body {
        background: -webkit-linear-gradient(left, #ADFF2F, #ADFF2F);
        background: linear-gradient(to right, #19aedb, #4825e2);
        font-family: 'Roboto', sans-serif;
    }

    section {
        margin: 50px;
    }

    h1 {
        color: #58f76d;
    }

    h4 {
        color: black;
    }

    button {
        align-self: center;
        border: none;
        background: none;
        padding: 10px 20px;
        color: #eee;
        background: #e28e10;
        border-radius: 5px;
    }

    button:hover {
        background: #eb6309;
    }

    input[type="checkbox"] {
        width: 1px;
        height: 1px;
    }
    a1 {
	margin:5px 8px;
    text-decoration:  none;
    font-size: 2em;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 5px;
    padding: 10px;
    position: relative;
    overflow: hidden;
    background: #2196f3;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    height: 25px;
    width: 25px;
    font-size: 20px;
    transition: box-shadow 1s ease-in-out,
     transform 1s ease-in-out;
    ;
}
a1:hover {
    color:#255784 ;
    background: #2196f3;
    box-shadow: 0 0 20px #2196f3 , 0 0 40px #2196f3 , 0 0 50px #2196f3;
    transform:  scale(1.2);
    transition: box-shadow 1s ease-in-out,
    transform 1s ease-in-out;
}
i {
    color: white;
}
</style>

<body>
    <?php
         session_start();
         if(empty($_SESSION['username'])){
			header('Location: login.php');
			exit;
		}
         $mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
         if($mysqli->connect_error){
             die("Connection Failed: ".$mysqli->connect_error);
         }
         if (isset($_POST["submit"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $mobile = $_POST['mobile'];
            $age = $_POST['age'];
            $max = count($name);
            $user = $_SESSION['username'];
            $source = $_SESSION['source'];
            $desti = $_SESSION['destination'];
            $plate_no = $_SESSION['plate_no'];
            $bus_name = $_SESSION['bus_name'];
            $seat = $_SESSION['seat'];
            for($row = 0; $row < $max; $row++)
            {
                $n = $name[$row];
                $e = $email[$row];
                $g = $gender[$row];
                $m = $mobile[$row];
                $a = $age[$row];
                $s = $seat[$row];
                $mysqli->query("INSERT INTO `passenger_detail`(`seat_no`, `passenger_name`, `email_id`, `mobile_no`, `age`, `gender`, `booked_by`, `source`, `destination`, `bus_plate_no`, `bus_name`) VALUES ('$s','$n','$e','$m','$a','$g','$user','$source','$desti','$plate_no','$bus_name')");
                $mysqli->query("INSERT INTO `booked_seat` (`seat_no`, `plate_no`, `user_name`, `booked_time`) VALUES ('$s', '$plate_no', '$user', current_timestamp());");
            }
            $temp = implode(' ',$seat);
            $result = $mysqli->query("SELECT seats from bus_info WHERE plate_no='$plate_no'");
            $row = mysqli_fetch_assoc($result);
            $t = $row['seats'];
            $str = substr($t,0);
            $ans = $str." ".$temp;
            $mysqli->query("UPDATE bus_info SET `SEATS`='$ans' WHERE `plate_no` = '$plate_no'");
        }

    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="neonLightHover.css">
<a1>
    <a href="index.php">
        <i class="fa fa-home"></i>
    </a>
</a1>   
    <form action="ticketbook.php">
        <h1 align="center">
            Thank You For Booking Ticket Form Our Trustable Website...
        </h1>
        <center>
            <img src="css/images/thanks.png" alt="happy" width="134" height="142">
        </center>
        <h4 align="center">
            To Make a new Resevation Click Below Button.
        </h4>
        <center>
            <button type="submit">
                Book new Resevation
            </button>
        </center>
    </form>
    &nbsp;
    <form action="cancel.php">
    <center>    
    <button type="submit">
            Your Reservations
        </button>
    </center>
    </form>
</body>

</html>