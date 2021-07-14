<?php

include 'DbConnect.php';
function register($Username, $Password){
$conn=connect();
$stmt= $conn->prepare("SELECT * FROM USERS WHERE Username = ? AND Password = ?") ;
$stmt->bind_param("ss", $Username, $Password);
return  $stmt->excute();
$records = $stmt->get_result();
return $records->num_rows ====1;
}
?>