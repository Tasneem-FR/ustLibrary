<?php
include("connect.php");

$alldata = array();
$alldata['status'] = "success";

$collegeID = isset($_POST['collegeID']) ? $_POST['collegeID'] : null;

if ($collegeID === null) {
    $alldata['status'] = "failure";
    $alldata['message'] = "collegeID is required";
    exit;
}

$response = getData2("college_section_view", "college_ID = ?", array($collegeID));

if ($response && isset($response['status']) && $response['status'] === "success") {
    $alldata['college_sections'] = $response['data']; // استرجاع جميع البيانات
} else {
    $alldata['status'] = "failure";
    $alldata['message'] = "No data found";
}

?>
