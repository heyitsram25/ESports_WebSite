<?php
$hostName= 'localhost';
$authName= 'root';
$pass='';
$dbname= 'esports_website';

$conn=new mysqli($hostName,$authName,$pass,$dbname);
require('include/function.php');

 $pwd = $_POST['Password'];
 $encrypted_pwd = md5($pwd);
 $username = $_POST['Login_ID']; 
 $fname = $_POST['First_Name'];
 $lname = $_POST['Last_Name'];
 $email = $_POST['Email'];

 $employee = $_POST['Employee_ID'];
 
 if (!stripslashes_deep($lname)) {
   
  $lname = addslashes($lname);
}
if (!stripslashes_deep($fname))
{
  $fname = addslashes($fname);
}
if (!stripslashes_deep($email))
{
  $email = addslashes($email);
}
if (!stripslashes_deep($email))
{
  $username = addslashes($username);
}
 
  
 
 
 $insert ="INSERT into Employee ( First_Name, Last_Name, Employee_ID, Email, Login_ID , Password) 
 VALUES  ('$fname', '$lname', '$employee', '$email',   '$username', '$encrypted_pwd')";
 if($conn->query($insert)){
  echo 'You have entered an employee';
 }
 else{
  echo 'Error '.$conn->error;  
 }





?>