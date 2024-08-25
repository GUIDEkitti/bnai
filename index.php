<?php

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <?php include_once("header.php"); ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <p>BNAI แชมพูออแกนิค สูตรมะกรูด</p>
    </div>

    <div class="d-flex justify-content-center ">
        <?php
        $url = "http://4646.site/comp1.php";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        // ตรวจสอบข้อผิดพลาดในการเรียก API
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            // แปลงข้อมูล JSON ให้เป็น Array
            $data = json_decode($response, true);
            print_r($data);

            // แสดงข้อมูลที่ได้รับจาก API
            if (!empty($data)) {
                foreach ($data as $item) {
                    echo "<p>" . htmlspecialchars($item['ProID']) . "</p>";
                }
            } else {
                echo "No results found.";
            }
        }
        curl_close($ch);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFZHAHvKxA+Nj6K+nW7DgL+5kseR2EjlHaN3vRY8nNFmGAGzr68FO5d8Mh"
        crossorigin="anonymous"></script>
</body>

</html>