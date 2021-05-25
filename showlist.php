<html>

<head>
    <title>list of Buses</title>
    <link rel="stylesheet" href="neonLightHover.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<style>
a1 {
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

<link rel="stylesheet" type="text/css" href="css/showlistUI.css" />
    <form action="showbus" method="POST">
  
        <h1><span class="blue">
        <a1>
    <a href="index.php">
        <i class="fa fa-home"></i>
    </a>
</a1>   
            <span class="yellow">..Welcome to Blue Bus..</span>  </h1>
        <table class="container">
        <?php
            session_start();
            if(empty($_SESSION['username'])){
                header('Location: login.php');
                exit;
            }
            $mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
            $source = $_SESSION['source'];
            $destination = $_SESSION['destination'];
            $date = $_SESSION['d'];
            $current = date('Y-m-d');
            if($date < $current){
                header('Location: ticketbook.php');
                exit;
            }
            $result = $mysqli->query("SELECT * FROM bus_info WHERE source='$source' && destination='$destination' && date='$date'"); 
            $num = mysqli_num_rows($result);
            if($num == 0){
                echo "<br>";
                echo "<center>";
                echo "<img src='css/images/no_bus.png' alt='no bus' width='334' height='342'>";
                echo "</center>";
                echo "<h2>";
                echo "<font size='+3'>";
                echo "OOPS!...";
                echo "</font>";
                echo "</h2>";
                echo "<h3 align='center'>";
                echo "<font size='+2'>";
                echo "No Buses Found....... :(";
                echo "</font>";
                echo "</h3>";
            }else{
                $data = array();
                while(($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != false){
                    $data[] = $row;
                } 
                $_SESSION['data'] = $data;
                echo "<h4>Please Select a Bus</h4>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>";
                echo "<h1>Bus Name</h1>";
                echo "</th>";
                echo "<th>";
                echo "<h1>Arrival</h1>";
                echo "</th>";
                echo "<th>";
                echo "<h1>Departure</h1>";
                echo "</th>";
                echo "<th>";
                echo "<h1>Fare</h1>";
                echo "</th>";
                echo "</tr>";
                echo "</thead>";
                for ($row = 0; $row < count($data); $row++){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<th><h3>";
                    echo $data[$row]['bus_name'];
                    echo "</h3></th>";
                    echo "<th><p>";
                    echo $data[$row]['boarding_time'];
                    echo "</p></th>";
                    echo "<th><p>";
                    echo $data[$row]['departure_time'];
                    echo "</p></th>";
                    echo "<th><p>";
                    echo $data[$row]['rate'];
                    echo " INR</p></td>";
                    echo "<td><h2><a href='details.php?key=$row'>showbus</a></h2></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            }
        ?>
        </table>
    </form>
</body>

</html>