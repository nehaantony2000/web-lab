<?PHP
$conn=mysqli_connect("localhost","root","","shallwe");
if($conn===false)
{
die("error:could not connect.".mysqli_connect_error());
}

?>