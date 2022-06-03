<?php

require './connect.php';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

if ($_REQUEST['task'] == 'contact') {
  $sql = "INSERT INTO messsages (name, email, phone, `message`) VALUES ('$name', '$email', '$phone', '$message')";

  $response = @mysqli_query($dbc, $sql);

  if ($response) {
    echo ('success');
  } else {
    echo mysqli_error($dbc);
  }
} else {
  echo mysqli_error($dbc);
}
