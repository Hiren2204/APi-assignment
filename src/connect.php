<?php  
$servername='localhost';
$username='root';
$password='';
$dbname = "login";
$UserName = $_POST['UserName'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die('Could not Connect MySql Server:' .mysql_error());
    }
$sql = "INSERT INTO `signlog` (`UserName`, `email`, `password`) VALUES ('$UserName', '$email', '$pswd')";

if($conn->query($sql)){
    echo "New Record Inserted";
}
else
{
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>