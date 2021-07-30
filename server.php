<?php


$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "test";

$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// if($link)
// {
//     echo 'connection succesfull';
// }
// else{
//     echo 'error occured';
// }
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && isset($password)) {
    $query    = "SELECT * FROM `user` WHERE username='$username'
AND password='" . md5($password) . "'";
    $result = mysqli_query($link, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo 'login failed';
    }
}
//  if($stmt = mysqli_prepare($link, $sql)){
//     // Bind variables to the prepared statement as parameters
//      mysqli_stmt_bind_param($stmt, "s", $username);
//      //Set parameters

//      //Attempt to execute the prepared statement
//      if(mysqli_stmt_execute($stmt)){
//          $result = mysqli_stmt_get_result($stmt);
//      }
//      while($row = $result->fetch_assoc()) {
//          echo '<h1>'.$row['username'].'</h1>';
//      }
//  }
// }
