<?php

include("connect.php");

$alldata = array();
$alldata['status'] = "success";

$result = getAllData(table: "colleges");

if ($result) {
    $alldata['colleges'] = $result;
} else {
    $alldata['status'] = "failure";
    $alldata['message'] = "No data found";
}

?>
