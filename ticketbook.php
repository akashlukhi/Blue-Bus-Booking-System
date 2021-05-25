<!DOCTYPE html>


<html>
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

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="neonLightHover.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<title>Booking </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body>

	<?php
		session_start();
		if(empty($_SESSION['username'])){
			header('Location: login.php');
			exit;
		}
	?>
	
	<link rel="stylesheet" type="text/css" href="css/ticketbookUI.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<div id="booking" class="section">
	<a1>
	<a href="index.php">
        <i class="fa fa-home"></i>
	</a>
</a1>

	<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
						<h1><font color="#0F69F6">Make your reservation</font></h1>
							<p style="font-weight: bold;"><font color="black">Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, ship or other means, with or without luggage, and can be one way or round trip. Travel can also include relatively short stays between successive movements, as in the case of tourism.</font>
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
					&nbsp;&nbsp;&nbsp;
						<div class="booking-form">
							<form  method = "post">
								<div class="form-group">
									<span class="form-label">Journy Date</span>
									<input class="form-control" type="date"name="date"  required >
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">source</span>
											<input class="form-control" type="text" name="source" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">destination</span>
											<input class="form-control" type="text" name="destination" required>
										</div>
									</div>
								</div>
								
								<div class="form-btn">
									<input type="submit" class="submit-btn" name="check" value="Check availability">
								</div>
								<?php
									$mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
									if(isset($_POST["check"])){
										$source = $_POST['source'];
										$destination = $_POST['destination'];
										$d = $_POST['date'];
										$_SESSION["source"] = $source;
										$_SESSION["destination"] = $destination;
										$_SESSION["d"] = $d;
										header('Location: showlist.php');
										exit;
									}
								?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>