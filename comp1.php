<?php

include("conn.php");

$sql = "SELECT * FROM bnai_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>ผลิตภัณฑ์</th><th>คุณสมบัติ</th><th>ภาพประกอบ</th></tr></thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ProName"] . "</td>";
        echo "<td>" . $row["ProDescription"] . "</td>";
        echo "<td><img src='" . $row["ProLink"] . "' alt='" . $row["ProName"] . "' style='width:200px; height: 200px;'></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No products found.";
}


mysqli_close($conn);

/* header("Access-Control-Allow-Origin: *");

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
} */