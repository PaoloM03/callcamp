<?php session_start(); error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); ?>
<!DOCTYPE html>
<html lang="it">
<?php include_once "head.php";
  ?>
<body>
<?php
if ($_SESSION["logged"] == true ) {
    include_once "navbar-login.php";
  }else{
  include_once "navbar-nologin.php";
  }
  ?>
  <?php include_once "contenuto-sei-gestore-nologin.php";?>
  <?php include_once "footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>