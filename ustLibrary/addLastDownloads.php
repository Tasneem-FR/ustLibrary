<?php
include("connect.php");


    $studentID = isset($_POST['studentID']) ? $_POST['studentID'] : null;
    $bookID = isset($_POST['bookID']) ? $_POST['bookID'] : null;

    if ($studentID !== null && $bookID !== null) {
        $data = [
            'students_id' => $studentID,
            'books_id' => $bookID
        ];

        $result = insertData('lastdownloadings', $data);

    } else {
        echo json_encode(['status' => 'failure', 'message' => 'studentID and bookID are required']);
    }
?>
