<?php

require './connect.php';

$food = $_REQUEST['food'];
$foodQuantity = $_REQUEST['foodQuantity'];
$drink = $_REQUEST['drink'];
$drinkQuantity = $_REQUEST['drinkQuantity'];
$type = $_REQUEST['type'];
$total = $_REQUEST['total'];
$user = $_REQUEST['user'];

if ($_REQUEST['task'] == 'reserve') {
  $sql = "INSERT INTO reservation (`food`, `foodQuantity`, `drink`, `drinkQuantity`, `type`, `total`, `user`) VALUES ('$food', '$foodQuantity', '$drink', '$drinkQuantity', '$type', '$total', '$user')";

  $response = @mysqli_query($dbc, $sql);

  if ($response) {
    echo ('success');
  } else {
    echo mysqli_error($dbc);
  }
} else {
  echo mysqli_error($dbc);
}
