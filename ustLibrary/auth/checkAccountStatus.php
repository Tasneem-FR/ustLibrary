<?php

include '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentsID = filterRequest("studentsID");

    $result = getData("students", "studentsID = ?", array($studentsID));

}
?>
