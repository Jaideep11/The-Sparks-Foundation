

<?php  

$dBUserName ="root";
$dBPassword ="";
$dBName ="localhost";

$conn=mysqli_connect('localhost',$dBUserName,$dBPassword,$dBName);

if (!$conn) {
	die("Connection Failed:" .mysqli_connect_error());
}