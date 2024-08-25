<?php

include("conn.php");

header("Access-Control-Allow-Origin: *");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;

    exit;
}

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $link->error);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $result = mysqli_query($conn, "SELECT * FROM bnai_db");

    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
            $output[] = $row;
        }    // while

        echo json_encode($output);
    } else {
        echo "Error 401";
    }
} else {
    echo "Error 402";
}


mysqli_close($conn);
