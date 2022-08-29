<?php

$servername="localhost";
$username="root";
$password="";
$dbname="minor";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
     die("Connection failed: "
        . $conn->connect_error);
}
$name=" ";
$email=" ";
$phone=" ";


$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql = "INSERT INTO register (name,email,phone) VALUES ('$name','$email','$phone')";

$result=$conn->query($sql);
if($result===true)
{
    echo "New record inserted";
}
else
{
    echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>