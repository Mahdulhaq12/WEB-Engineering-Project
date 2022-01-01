<?php

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Message = $_POST['message'];
$Notification = $_POST['notification'];

//connection with databse

$conn = new mysqli('localhost','mehranabbas','mehranabbas@1999','weeklynews');

if($conn->connect_error)
{
    die('Connection failed please fix the problem' .$conn->connect_error);
}

else
{
    $stmp = $conn->prepare("insert into registeration (Name, Email, Phone, Message,Notification) values(?,?,?,?,?)");

    $stmp->bind_param("sssss",$Name,$Email,$Phone,$Message,$Notification);
    $stmp->execute();
    echo "Registration Sucessfull";
}

?>