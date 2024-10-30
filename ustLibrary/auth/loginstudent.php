<?php 

include "../connect.php";

$stNum = filterRequest("studentNumber");
$password = sha1($_POST["studentPassword"]); 


getData("students", "studentNumber = ? AND studentPassword = ?", array($stNum,$password));
?>
