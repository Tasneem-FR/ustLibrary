<?php
include("connect.php");

$studentNumber = isset($_POST['studentNumber']) ? $_POST['studentNumber'] : null;

if ($studentNumber !== null) {
    $stmt = $con->prepare(query: "
        SELECT * FROM lastdownloadings_view 
        WHERE studentNumber = :studentNumber 
        ORDER BY download_date DESC 
        LIMIT 10
    ");
    $stmt->bindParam(':studentNumber', $studentNumber, PDO::PARAM_STR);
    $stmt->execute();
    $downloads = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['status' => 'success', 'data' => $downloads]);
} else {
    echo json_encode(['status' => 'failure', 'message' => 'studentNumber is required']);
}
?>
