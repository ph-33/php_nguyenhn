<?php include("view/header.php"); ?>
<h1>chuc mung <em><?php echo $_SESSION['owner_no'].' ';?></em>da dang nhap thanh cong</h1>
<nav class="nav justify-content-center">
  <a class="nav-link" href="?action=viewaccount">View Account</a>
  <a class="nav-link" href="?action=logout">Logout</a>
</nav>
<?php include("view/footer.php"); ?>