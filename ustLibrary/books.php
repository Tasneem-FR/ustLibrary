<?php
include("connect.php");

$alldata = array();
$alldata['status'] = "success";

$sectionID = isset($_POST['sectionID']) ? $_POST['sectionID'] : null;
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
$limit = 10; // عدد العناصر في كل صفحة
$offset = ($page - 1) * $limit;

if ($sectionID === null) {
    echo json_encode(value: array("status" => "failure"));

    exit;
}

$response = getData2("bookssections_view", "section_id = ? LIMIT $limit OFFSET $offset", array($sectionID));



?>
