<?php
include '../include/_header.php';
?>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Welcome to CELTS!</h1>

    <h5>Please SignUp Below</h5>
<div class="main-agileinfo">
  <div class="agileits-top">
    <form id="signup_form" name="signup_form" action="../operate/signup.php" method="post">
      <input class="text" type="text" name="first_name" placeholder="First Name" required="">
      <input class="text" type="text" name="last_name" placeholder="Last Name" required="">
      <input class="text" type="text" name="user_name" placeholder="Username" required="">
      <input class="text email" type="email" name="email" placeholder="Email" required="">
      <input class="text" type="password" name="pword" id="pword" placeholder="Password" required="">
      <input class="text w3lpass" type="password" name="confirm_pword" id="confirm_pword" placeholder="Confirm Password" required="">
      <div class="wthree-text">
        <label class="anim">
          <input type="checkbox" class="checkbox" required="">
          <span>I Agree To The Terms & Conditions</span>
        </label>
        <div class="clear"> </div>
      </div>
      <input type="submit" value="SIGNUP" name="SignUp">
    </form>
    <p>Already have an Account? <a href="../index.php"> Login Now!</a></p>
  </div>
</div>

<?php include '../include/_footer.php'; ?>
