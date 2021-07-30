<?php
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
    echo '<a href="http://localhost/userRegistration/logout.php">Logout</a>';
} else {
    echo "<script>window.location.href = 'http://localhost/userRegistration/signin.php'</script>";
}
// echo $_SESSION['username'];
?>