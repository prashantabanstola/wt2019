<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "test";
 
$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = md5($_POST['password']);

echo $first . $last . $username . $password ;
$sql = "INSERT INTO user (first,last,username,password) VALUES ('$first', '$last', '$username', '$password')";
$result   = mysqli_query($link, $sql);
if($result)
{
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
}
else{
    echo 'error occured';
}
// if($stmt = mysqli_prepare($link, $sql)){
//     mysqli_stmt_bind_param($stmt, "ssss",$param_first,$param_last,$param_username,$param_password);

//     $param_first = $first;
//     $param_last = $last;
//     $param_username = $username;
//     $param_password = $password;
//     if(mysqli_stmt_execute($stmt)){
//         session_start();
//         $_SESSION['username'] = $username;
//         echo "window.location.href = 'http://localhost/signin/dashboard.php'";
//     }
// }
?>