<?php
session_start();
echo 'Logged out <br>';
$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
if (isset($_SESSION['url'])) {
  if ($_SESSION['url'] != 'http://localhost/github/btt/myCart.php')
    $url = $_SESSION['url'];
  else
    $url = "index.php";
} else {
  $url = "index.php";
}
echo $url;
session_destroy();
header("location:" . $url);
