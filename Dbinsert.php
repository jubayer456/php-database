<?php

include 'DbConnect.php';
function register($Username, $Password){
$conn=connect();
$stmt= $conn->prepare("INSERT INTO USERS (Username,Password) 
VALUES(?,?)");
$stmt->bind_param("ss", $Username, $Password);
return  $stmt->excute();
}
?>