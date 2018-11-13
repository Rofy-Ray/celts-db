<?php
   include '../include/_header.php';
   include '../operate/session.php';
?>

<!-- main -->
<div class="main-w3layouts wrapper">
  <h1>Welcome, <?php echo $login_session; ?>!</h1>

<div class="main-agileinfo">
<div class="agileits-top">
  <form id="logout_button" name="logout" action="operate/logout.php" method="post">
    <input type="submit" value="SIGNOUT" name="Sign Out">
  </form>
</div>
</div>

<?php include '../include/_footer.php'; ?>
