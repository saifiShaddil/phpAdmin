<?php 

$servername='localhost';
$username='root';
$dbname='user';
$password='';

$conn= mysqli_connect($servername,$username);

if ($conn){
 echo 'Connected';
}
else {
  echo 'Not Connected';
}

mysqli_select_db($conn, 'userdata');

$user=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$query= " insert into userinfo (username, email, password) 
values ($user, $email, $password) ";

echo " _New Record Added";
mysqli_query($conn,$query)

?>