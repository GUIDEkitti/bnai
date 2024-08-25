<?php

include("conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM bnai_db";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $links = array();
        while ($row = $result->fetch_assoc()) {
            $links[] = $row;
        }
        echo json_encode($links);
    } else {
        echo json_encode([]);
    }
}

$conn->close();
