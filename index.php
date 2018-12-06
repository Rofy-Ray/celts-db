<?php
include 'include/index_header.php';
session_start();
?>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Welcome to CELTS!</h1>
    <h5>Please Login Below</h5>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<div class="imgcontainer">
    			<img src="form/img_avatar.png" alt="Avatar" class="avatar">
  			</div>
				<form id="login_form" action="operate/login.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="" style="margin: 0 auto;">
					<input class="text" type="password" name="password" id="password" placeholder="Password" required="" style="margin: 25px auto;">
					<span id="error_msg" name="error_msg"></span>
					<input type="submit" value="LOGIN" name="LogIn" style="width: 95%; margin: 10px 10px;">
				</form>
				<p>Don't have an Account? <a href="form/signup_form.php"> Signup Now!</a></p>
			</div>
		</div>

<?php include 'include/index_footer.php'; ?>
