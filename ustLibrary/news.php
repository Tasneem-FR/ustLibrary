<?php

include("connect.php");

$alldata = array();
$alldata['status'] = "success";

$result = getAllData(table: "news");

if ($result) {
    $alldata['news'] = $result;
} else {
    $alldata['status'] = "failure";
    $alldata['message'] = "No data found";
}


?>
