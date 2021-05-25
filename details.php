<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" href="style.css">
    <style type="text/css">
        input[type="checkbox"] {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="neonLightHover.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
}

</style>
<a1> <a href='index.php'><i class='fa fa-home'></i> </a></a1>
        
<body>
   
    <?php
    session_start();
    if(empty($_SESSION['username'])){
        header('Location: login.php');
        exit;
    }
    $mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
    $url = basename($_SERVER['PHP_SELF']);
    $query = $_SERVER['QUERY_STRING'];
    $_SESSION['page'] = $url."?".$query;
    $data = $_SESSION['data'];
    $a = $_GET['key'];
    $_SESSION['bus_name'] = $data[$a]['bus_name'];
    $_SESSION['plate_no'] = $data[$a]['plate_no'];
    $_SESSION['rate'] = $data[$a]['rate'];
    $name = $data[$a]['bus_name'];
    $key = $_SESSION['plate_no'];
    $_SESSION['b_time'] = $data[$a]['boarding_time']; 
    $_SESSION['d_time'] = $data[$a]['departure_time']; 
    $result = $mysqli->query("SELECT seats FROM bus_info WHERE plate_no='$key'");
    $seats = mysqli_fetch_row($result);
 ?>
    <link rel="stylesheet" type="text/css" href="css/detailsUI.css" />
    
    <form action="checkout.php" method="post">
        <?php
        echo "<h1 class='name'>";
        echo $name;
        echo "</h1>";
        echo "<h6 class='name'>";
        echo "(";
        echo $key;
        echo ")";
        echo "</h6>";
        ?>
        <div class="bus">
            <div class="bus-seat">
                <div class="upper">
                    <h1>Lower</h1>
                        <div class="upper-seats">
                    <?php
                        $lower = array('L1','L2','L3','L4','L5','L6','L7','L8','L9','L10','L11','L12','L13','L14','L15','L16','L17','L18');
                        $t = 1;
                        foreach($lower as $val){
                            echo "<label for='$val'>";
                            if (strpos($seats[0], $val) !== false) {
                                echo "<div class='seat b' id='b'>";
                            } else {
                                echo "<div class='seat'>";
                            }
                            echo "<div class='num'>$t</div>";
                            echo "<input type='checkbox' name='checked[]' id='$val'value='$val'>";
                            echo "</div>";
                            echo "</label>";
                            $t++;
                        }
                    ?>        
        </div>
        </div>
        <div class="lower">
            <h1>Upper</h1>
            <div class="upper-seats">
            <?php
                        $upper = array('U1','U2','U3','U4','U5','U6','U7','U8','U9','U10','U11','U12','U13','U14','U15','U16','U17','U18');
                        $t = 1;
                        foreach($upper as $val){
                            echo "<label for='$val'>";
                            if (strpos($seats[0], $val) !== false) {
                                echo "<div class='seat b' id='b'>";
                            } else {
                                echo "<div class='seat'>";
                            }
                            echo "<div class='num'>$t</div>";
                            echo "<input type='checkbox' name='checked[]' id='$val'value='$val'>";
                            echo "</div>";
                            echo "</label>";
                            $t++;
                        }
                    ?>             
        </div>
        </div>
        </div>
        <div class="colors">
            <div class="not-booked sec">
                <h4>Not Booked</h4>
                <div class="box nb"></div>
            </div>
            <div class="booked sec">
                <h4>Booked</h4>
                <div class="box b1" id="b"></div>
            </div>
            <div class="selected sec">
                <h4>Selected</h4>
                <div class="box s"></div>
            </div>
        </div>
        <table border="0">
            <tr>
                <td align="right">
                    <button type="submit" name="submit" class="button">Book Now</button>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="center">
                    <button type="reset" class="button">Clear seats</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <script>
        let s = document.querySelectorAll('.upper .seat');
        var i = 1

        s.forEach(a => {
            a.addEventListener('click', (e) => {
                if (e.target.classList.value.includes(' s')) {
                    e.target.classList.remove('s');
                    console.log(e.target.classList.value.includes(' s'))
                } else {
                    e.target.classList.add('s');
                    console.log(e.target.classList.value.includes(' s'))
                }
            });
        });
        let j = 1
        let s1 = document.querySelectorAll('.lower .seat');
        s1.forEach(a1 => {
            a1.addEventListener('click', (e) => {
                if (e.target.classList.value.includes(' s')) {
                    e.target.classList.remove('s');
                    console.log(e.target.classList.value.includes(' s'))
                } else {
                    e.target.classList.add('s');
                    console.log(e.target.classList.value.includes(' s'))
                }
            });
        });

        function fun() {
            console.log('hello')
        }
        console.log(s1);
        let b = document.querySelectorAll('.b');
        b.forEach(b1 => {

            b1.children[1].setAttribute('disabled', true)
            b1.removeEventListener('click', fun, false)
        });
    </script>
</body>

</html>