<?php include("../header.php"); ?>
<?php session_start(); ?>
<h1>chuc mung <em><?php echo $_SESSION['owner_no'].' ';?></em>da dang nhap thanh cong</h1>
<nav class="nav justify-content-center">
  <a class="nav-link" href="viewaccount.php">View Account</a>
  <a class="nav-link" href="../../controller/account_controller.php?action=logout">Logout</a>
</nav>
<?php include("../footer.php"); ?>