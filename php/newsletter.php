<?php

require './connect.php';

$email = $_REQUEST['email'];

if ($_REQUEST['task'] == "news") {
  $query = "INSERT INTO newsletter (`email`) VALUES ('$email')";

  $response = @mysqli_query($dbc, $query);
  if ($response) {
    echo ('sent');
  } else {
    echo mysqli_error($dbc);
  }
}
