<?php

require './connect.php';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$hashedPass = $hash_pass = password_hash($password, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == 'register') {
  $sql = "INSERT INTO users (name, email, password ) VALUES ('$name', '$email', '$hashedPass')";

  $response = @mysqli_query($dbc, $sql);

  if ($response) {
    echo ('success');
  } else {
    echo mysqli_error($dbc);
  }
} else {
  echo mysqli_error($dbc);
}
