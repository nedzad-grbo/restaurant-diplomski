<?php

require './connect.php';

$emailLog = $_REQUEST['email'];
$passLog = $_REQUEST['password'];

$hashedPass = $hash_pass = password_hash($passLog, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == "login") {

  $sql = "SELECT `email`, `password` FROM `users` WHERE `email` = '$emailLog'";
  $result = $dbc->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row['email'] == $emailLog) {
        if (password_verify($passLog, $row['password'])) {
          $query = "INSERT INTO `login` (`email`) VALUES ('$emailLog')";

          $response = @mysqli_query($dbc, $query);
          if ($response) {
            echo ('success');
            session_start();
            $_SESSION["email"] = $row["email"];
          } else {
            echo mysqli_error($dbc);
          }
        } else {
          echo ('pass');
        }
      } else {
        echo ('mail');
      }
    }
  }
}
