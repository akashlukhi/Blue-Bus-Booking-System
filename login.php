<html>
<title>LOG IN</title>
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
<body>
	<?php
		session_start();
	?>
	<link rel="stylesheet" type="text/css" href="css/loginUI.css" />
	<link rel="stylesheet" href="neonLightHover.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<form method="post">
	<a1>
	<a href="index.php">
        <i class="fa fa-home"></i>
	</a>
</a1>
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
					In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
				<div class="login-form">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In" name="submit">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</div>
					<?php
						$mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
						if(isset($_POST["submit"])){
							$name = $_POST['username'];
							$pass = $_POST['password'];
							$result = $mysqli->query("SELECT user_name FROM user WHERE user_name='$name' && password='$pass'");
							$num = mysqli_num_rows($result);
							if($num == 1){
								$_SESSION["username"] = $name;
								header('Location: ticketbook.php');
								exit;
							}else{
								echo '<script>alert("Username or Passworare Incorrect")</script>'; 
							}
						}
					?>
	</form>
	<form  method="post">
		<div class="sign-up-htm">
			<div class="group">
				<label for="user" class="label">Username</label>
				<input id="user" type="text" class="input" name="username">
			</div>
			<div class="group">
				<label for="pass" class="label">Password</label>
				<input id="pass" type="password" class="input" data-type="password" name="password">
			</div>
			<div class="group">
				<label for="pass" class="label">Repeat Password</label>
				<input id="pass" type="password" class="input" data-type="password" name="re-password">
			</div>
			<div class="group">
				<label for="pass" class="label">Email Address</label>
				<input id="pass" type="text" class="input" name="email_id">
			</div>

			<div class="group">
				<input type="submit" class="button" value="Sign Up" name="signup">
			</div>

		</div>
		</div>
		</div>
		</div>
		<?php
			$mysqli = new mysqli("localhost", "akash", "AKlukhi@123", "db");
			if(isset($_POST["signup"])){
				$name = $_POST['username'];
				$pass = $_POST['password'];
				$rpass = $_POST['re-password'];
				$email = $_POST['email_id'];
				$result = $mysqli->query("SELECT user_name FROM user WHERE user_name='$name'");
				$num = mysqli_num_rows($result);
				if($num == 1){
					echo '<script>alert("this user name is taken by another user")</script>'; 
					exit;
				}
				elseif($pass != $rpass){
					echo '<script>alert("password and re-password are not same")</script>'; 
					exit;
				}
				$_SESSION["username"] = $name;
				$mysqli->query("INSERT INTO user(user_name,password,email_id) VALUES('$name','$pass','$email')");
				header('Location: ticketbook.php');
				exit;
			}
		?>
	</form>
</body>

</html>