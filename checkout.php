<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="neonLightHover.css">
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

<body>
<a1>
    <a href="index.php">
        <i class="fa fa-home"></i>
    </a>
</a1>   

  <?php
    session_start();
    if (isset($_POST["submit"])) {
        if (empty($_POST['checked'])) {
            $path = $_SESSION['page'];
            header("Location: $path");
            exit;
        }
    }
    ?>

	<link rel="stylesheet" type="text/css" href="css/checkoutUI.css" />
  <form action="thankyou.php" method="POST">
    <br>
  <div class="row">
    <div class="col-75">
      <div class="container">
        
          <div class="row">
            <div class="col-50">
              <h3>Passenger Details</h3>
              <?php
              $_SESSION['seat'] = $_POST['checked'];
              $temp = 1;
              foreach ($_POST['checked'] as $select) {
              echo "<h4>$temp Person Detaile (seat :- $select)</h4>";
              echo "<label for='name'><i class='fa fa-user'></i> Full Name</label>";
              echo "<input type='text' id='name' name='name[]' placeholder='Enter your Full Name' required>";
              echo "<label for='email'><i class='fa fa-envelope'></i> Email</label>";
              echo "<input type='text' id='email' name='email[]' placeholder='john@example.com' required>";
              echo "<div>";
              echo "<label for='name'>Gender</label>";
              echo "<input type='text' id='gender' name='gender[]' placeholder='gender' required>";
              echo "</div>";
              echo "<div class='row'>";
              echo "<div class='col-50'>";
              echo "<label for='mobile'><i class='fa fa-address-card-o'></i> Mobile no</label>";
              echo "<input type='text' id='mobile' name='mobile[]' placeholder='1234567890' required>";
              echo "</div>";
              echo "<div class='col-50'>";
              echo "<label for='age'>Age</label>";
              echo "<input type='text' id='age' name='age[]' placeholder='20' required>";
              echo "</div>";
              echo "</div><br>";
                $temp++;
            }
          ?>
            </div>
            <div class="col-50">
              <?php
                $temp -=1;
                $source = $_SESSION['source'];
                $destination = $_SESSION['destination'];
                $price = $_SESSION['rate'];
                echo "<h3> From $source To $destination</h3>";
                if ($temp > 1){
                  echo "<p>Total Seats:- $temp"; 
                }else{
                  echo "<p>Total Seat:- $temp"; 
                }
                $price = $price * $temp;
                $_SESSION['price'] = $price;
                echo "<h3>Payment:- $price INR<br></h3>";
                ?>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Card Holder Name</label>
              <input type="text" id="cname" name="cardname" placeholder="akash lukhi" required>
              <label for="ccnum">Card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
              <div class="row">
                <div class="col-50">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="9" required>
                </div>
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018" required>
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352" required>
                </div>
              </div>
            </div>
            
          </div>
         
          <input type="submit" value="Procced To Pay" name="submit" class="btn">
        </form>
      </div>
    </div>
    
  </div>
  
</body>
</html>
