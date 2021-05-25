<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cansel Reservation</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/cancelUI.css" />

</head>
<style>
	
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
    height: 48px;
    width: 48px;
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
}</style>

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
        $user= $_SESSION['username'];
    ?>
<section class="price-sec">
    <div class="container-fluid">
        <div class="container">
          <div class="row ptables-head">
            <h1 class="text-center" align="center">Your Reservation</h1>
          </div>
            <div class="row">
            <table align="center">
                <tr>
                        <?php
                            $result = $mysqli->query("SELECT * from `booked_seat` WHERE `user_name`='$user'");
                            while($row =  mysqli_fetch_assoc($result)){    
                                $t = $row['seat_no'];
                                $s = substr($t,0);
                                $temp = $row['plate_no'];
                                $plate_no = substr($temp,0);
                                $passenger = $mysqli->query("SELECT passenger_name,source,destination,bus_name from `passenger_detail` WHERE `booked_by`='$user' && `seat_no`= '$s' && `bus_plate_no`='$plate_no'");
                                $name =  mysqli_fetch_assoc($passenger);
                                $p_name = $name['passenger_name'];
                                $p = substr($p_name,0);
                                $p_name = $name['source'];
                                $source = substr($p_name,0);
                                $p_name = $name['destination'];
                                $destination = substr($p_name,0);
                                $p_name = $name['bus_name'];
                                $bus_name = substr($p_name,0);
                                echo "<td>";
                                echo "<div class='col-sm-4 price-table'>";
                                echo "<div class='card text-center'>";
                                echo "<div class='title'>";
                                echo "<h2>$bus_name</h2>";
                                echo "<p>($plate_no)</p>";
                                echo "</div>";
                                echo "<div class='price'>";
                                echo "<h3>$p</h3>";
                                echo "</div>";
                                echo "<div class='option'>";
                                echo "<ul>";
                                echo "<li> Seat No:- $s</li>";
                                echo "<li> From:- $source</li>";
                                echo "<li> To:- $destination</li>";
                                echo "</ul>";
                                echo "</div>";
                                echo "<span>";
                                echo "<a href='delete_record.php?seat=$s&key=$plate_no' onclick='confirm('Are You sure To Cancel This Reservation')'>Cancel Now</a>";
                                echo "</span>";
                                echo "</div>";
                                echo "</div>";
                                echo "</td>";
                                echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
        }
        ?>
         </tr>
     </table>
     &nbsp;
     <center>
     <a1>
	<a href="index.php">
        <i class="fa fa-home"></i>
	</a>
</a1>
    </center>
             </div>
         </div>
     </div>
 </section>

</body>
</html>
