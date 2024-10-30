<?php

include "../connect.php";

$academy_number = filterRequest("studentNumber");
$password = sha1($_POST['studentPassword']) ; 
$data = array("studentPassword" => $password);

updateData("students", $data, "studentNumber = '$academy_number'");
?>