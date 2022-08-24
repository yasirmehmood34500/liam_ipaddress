<?php session_start();
$conn=new mysqli("localhost","root","","liam_ipaddress_xml");
if (!isset($_SESSION['login_sess'])) {
    echo "<script>window.location='login.php'</script>";
}
?>